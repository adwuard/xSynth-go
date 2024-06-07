#!/usr/bin/env python3

import argparse
import math
import json

NOTES = ["C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"]

def int_from_file(f):
	return int(f.read(1).hex(), 16)

def curve_type(value):
	if value == 0:
		return "-LIN"
	elif value == 1:
		return "-EXP"
	elif value == 2:
		return "+EXP"
	elif value == 3:
		return "+LIN"
	else:
		return "Error"	

def lfo_wave_type(value):
	if value == 0:
		return "TRIANGLE"
	elif value == 1:
		return "SAW DOWN"
	elif value == 2:
		return "SAW UP"
	elif value == 3:
		return "SQUARE"
	elif value == 4:
		return "SINE"
	elif value == 5:
		return "SAMPLE & HOLD"
	
def frequency(coarse, fine, mode):
	if mode == 0:
		if coarse > 0:
			return_frequency = coarse + (fine * 0.01 * coarse)
		else:
			return_frequency = 0.5 + fine * 0.005
		return return_frequency
	else:
		base_frequency = pow(10, coarse & 3)
		base_frequency = base_frequency * math.exp(2.30258509299404568402 * (fine / 100))
		return base_frequency

def operator_breakpoin(breakpoint_number):
	# C3 = 27
	note_name = NOTES[(breakpoint_number + 9) % 12]
	breakpoint = 3
	for octave in range(-1,8):
		if breakpoint_number < breakpoint:
			return "{}{}".format(note_name, octave)
		breakpoint += 12
	return "Unknown"

def setupArguments():
	parser = argparse.ArgumentParser(
		prog = "syxreader.py",
		description = "Read sysex ROM files for the original DX7."
	)
	parser.add_argument('-i', '--infile', dest = 'input_file', required = True)
	parser.add_argument('-n', '--voice-number', dest = 'voice_number', required = True, default = 1, type = int)
	return parser.parse_args()



params_key = dict()


if __name__ == "__main__":
	args = setupArguments()
	with open(args.input_file, 'rb') as f:
		for voice_number in range(1, 33):
			f.seek(6 + (128 * (voice_number - 1)))

			parameters = {}
			for operator in reversed(range(1, 7)):
				operator_params = {}
				for rate in range(1, 5):
					operator_rate = int_from_file(f)
					operator_params[f"EG Rate {rate}"] = operator_rate
				for level in range(1, 5):
					operator_level = int_from_file(f)
					operator_params[f"EG Level {level}"] = operator_level
				operator_scaling_break_point = int_from_file(f)
				operator_params["Keyboard level scaling breakpoint"] = operator_scaling_break_point
				operator_left_depth = int_from_file(f)
				operator_params["Keyboard level scaling left depth"] = operator_left_depth
				operator_right_depth = int_from_file(f)
				operator_params["Keyboard level scaling right depth"] = operator_right_depth
				curve_byte = int_from_file(f)
				left_curve_byte = curve_byte >> 2
				operator_params["Left curve"] = curve_type(left_curve_byte)
				right_curve_byte = curve_byte & ~(1 << 2) & ~(1 << 3)
				operator_params["Right curve"] = curve_type(right_curve_byte)
				osc_detune_and_rate_scale = int_from_file(f)
				detune = (osc_detune_and_rate_scale >> 3) - 7
				operator_params["Oscillator detune"] = detune
				rate_scale = osc_detune_and_rate_scale & ~(1 << 3) & ~(1 << 4) & ~(1 << 5) & ~(1 << 6) & ~(1 << 7)
				operator_params["Oscillator rate scale"] = rate_scale
				velocity_sensitivity_and_amp_mod = int_from_file(f)
				key_velocity_sensitivity = velocity_sensitivity_and_amp_mod >> 2
				operator_params["Key velocity sensitivity"] = key_velocity_sensitivity
				amplitude_mod_sensitivity = velocity_sensitivity_and_amp_mod & ~(1 << 2) & ~(1 << 3) & ~(1 << 4) & ~(1 << 5) & ~(1 << 6) & ~(1 << 6)
				operator_params["Amplitude modulation sensitivity"] = amplitude_mod_sensitivity
				output_level = int_from_file(f)
				operator_params["Output level"] = output_level
				coarse_freq_and_oscillator_mode = int_from_file(f)
				coarse_frequency = coarse_freq_and_oscillator_mode >> 1
				oscillator_mode = coarse_freq_and_oscillator_mode & ~(1 << 1) & ~(1 << 2) & ~(1 << 3) & ~(1 << 4) & ~(1 << 5)
				freq_fine = int_from_file(f)
				combined_frequency = frequency(coarse_frequency, freq_fine, oscillator_mode)
				operator_params["Coarse frequency"] = coarse_frequency
				operator_params["Oscillator mode"] = "FIXED" if oscillator_mode == 1 else "RATIO"
				operator_params["Fine frequency"] = freq_fine
				operator_params["Combined frequency (as displayed)"] = combined_frequency
				parameters[f"Operator {operator}"] = operator_params

			for rate in range(1, 5):
				pitch_rate = int_from_file(f)
				parameters[f"Pitch EG Rate {rate}"] = pitch_rate
			for level in range(1, 5):
				pitch_level = int_from_file(f)
				parameters[f"Pitch EG Level {level}"] = pitch_level

			algorithm = int_from_file(f) + 1
			parameters["Algorithm"] = algorithm

			osc_key_sync_feedback = int_from_file(f)
			oscillator_key_sync = (osc_key_sync_feedback >> 3)
			parameters["Oscillator key sync"] = "ON" if oscillator_key_sync == 1 else "OFF"

			lfo_speed = int_from_file(f)
			parameters["LFO Speed"] = lfo_speed
			lfo_delay = int_from_file(f)
			parameters["LFO Delay"] = lfo_delay
			lfo_pitch_mod_depth = int_from_file(f)
			parameters["LFO pitch mod depth"] = lfo_pitch_mod_depth
			lfo_amp_mod_depth = int_from_file(f)
			parameters["LFO amplitude mod depth"] = lfo_amp_mod_depth
			lfo_raw_block = int_from_file(f)
			lfo_pitch_mod_sensitivity = (lfo_raw_block >> 4)
			parameters["LFO pitch modulation sensitivity"] = lfo_pitch_mod_sensitivity
			lfo_wave = (lfo_raw_block >> 1) & ~(1 << 3) & ~(1 << 4) & ~(1 << 5)
			parameters["LFO Wave"] = lfo_wave_type(lfo_wave)
			lfo_sync = lfo_raw_block & ~(1 << 2) & ~(1 << 3) & ~(1 << 4) & ~(1 << 5) & ~(1 << 6)
			parameters["LFO sync"] = "ON" if lfo_sync == 1 else "OFF"

			transpose = int_from_file(f)
			parameters["Transpose"] = transpose
			patch_name = f.read(10).decode("utf-8")
			parameters["Patch name"] = patch_name

			sorted_params_key = dict(sorted(parameters.items()))
			print(json.dumps(sorted_params_key, indent=4))
			print()
			output_file = f"/home/edward/dx7_github/DX7Sysex2csv/voice_{voice_number}.json"
			with open(output_file, 'w') as outfile:
				json.dump(sorted_params_key, outfile, indent=4)
