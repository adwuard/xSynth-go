


class XFM2_UNIT ():
    payload = bytearray(512)
    
    def __init__(self):
        pass    
    
    
    
    
    
    pass


class XFM2_PARAM():
    """Operator key index [1-6]""" 
    OP1 = 0
    OP2 = 1
    OP3 = 2
    OP4 = 3
    OP5 = 4
    OP6 = 5
    
    """Operator parameters [1-6]""" 
    PARAM_OP_ALGO = [1,2,3,4,5,6] # Bitwise parameter, selects which operator will modulate the selected operator
    PARAM_OP_FEEDBACK = [7,8,9,10,11,12] # Sets the self feedback level
    PARAM_OP_SYNC = 13
    PARAM_OP_PHASE = [286, 287, 288, 289, 290, 291]
    PARAM_OP_RATIO = [15,16,17,18,19,20]
    PARAM_OP_RATIO_FINE	= [21,22,23,24,25,26]
    PARAM_OP_FINE = [27,28,29,30,31,32]
    PARAM_OP_LEVEL = [33,34,35,36,37,38]
    PARAM_OP_LEVEL_L = [256,258,260,262,264,266]
    PARAM_OP_LEVEL_R = [257,259,261,263,265,267]
    PARAM_OP_VELO_SENS = [39,40,41,42,43,44]
    PARAM_OP_KEY_BP = [45,46,47,48,49,50]
    PARAM_OP_KEY_LDEPTH	= [51,52,53,54,55,56]
    PARAM_OP_KEY_RDEPTH	= [57,58,59,60,61,62]
    PARAM_OP_KEY_LCURVE	= [63,64,65,66,67,68]
    PARAM_OP_KEY_RCURVE	= [69,70,71,72,73,74]
    PARAM_OP_L0 = [181,182,183,184,185,186]
    PARAM_OP_L1 = [75,76,77,78,79,80]
    PARAM_OP_L2 = [82,83,84,85,86,87]
    PARAM_OP_L3 = [89,90,91,92,93,94]
    PARAM_OP_L4 = [96,97,98,99,100,101]
    PARAM_OP_L5 = [193,194,195,196,197,198]
    PARAM_OP_DLY = [187,188,189,190,191,192]
    PARAM_OP_R1 = [103,104,105,106,107,108]
    PARAM_OP_R2 = [110,111,112,113,114,115]
    PARAM_OP_R3 = [117,118,119,120,121,122]
    PARAM_OP_R4 = [124,125,126,127,128,129]
    PARAM_OP_R5 = [199,200,201,202,203,204]
    PARAM_OP_RATE_KEY = [140,141,142,143,144,145]
    PARAM_OP_EG_LOOP = 244
    PARAM_OP_EG_LOOP_SEG = 245
    PARAM_OP_AMS = [159,160,161,162,163,164]
    PARAM_OP_PMS = [222,223,224,225,226,227]
    PARAM_OP_WAVE_1 = [236,237,238,239,240,241]
    PARAM_OP_WAVE_2 = [268,269,270,271,272,273]
    PARAM_OP_W_MODE = [274,275,276,277,278,279]
    PARAM_OP_W_RATIO = [280,281,282,283,284,285]
        
    """ PITCH EG (Envelope Generator)"""
    PARAM_PITCH_EG = 0
    PARAM_PITCH_EG_L0 = 205
    PARAM_PITCH_EG_L1 = 130
    PARAM_PITCH_EG_L2 = 131
    PARAM_PITCH_EG_L3 = 132
    PARAM_PITCH_EG_L4 = 133
    PARAM_PITCH_EG_L5 = 207
    PARAM_PITCH_EG_DLY = 206
    PARAM_PITCH_EG_R1 = 134
    PARAM_PITCH_EG_R2 = 135
    PARAM_PITCH_EG_R3 = 136
    PARAM_PITCH_EG_R4 = 137
    PARAM_PITCH_EG_R5 = 208
    PARAM_PITCH_EG_RATE_KEY = 146
    PARAM_PITCH_EG_RANGE = 138
    PARAM_PITCH_EG_VELO = 139

    """ LFO (Low Frequency Oscillator)"""
    PARAM_LFO_WAVE	= 153
    PARAM_LFO_SPEED	= 151
    PARAM_LFO_SYNC	= 152
    PARAM_LFO_FADE	= 154
    PARAM_LFO_DEPTH_PITCH	= 149
    PARAM_LFO_DEPTH_AMP	= 150

    """ ======== MODULATIONS ======== """
    """ PITCH LFO """
    PARAM_PITCH_LFO_AFTER = 157
    PARAM_PITCH_LFO_WHEEL = 155
    PARAM_PITCH_LFO_BREATH = 209
    PARAM_PITCH_LFO_FOOT = 211    
    """ AMP LFO """
    PARAM_AMP_LFO_AFTER =	158
    PARAM_AMP_LFO_WHEEL =	156
    PARAM_AMP_LFO_BREATH =	210
    PARAM_AMP_LFO_FOOT =	212
    """ EG BIAS """
    PARAM_EG_BIAS_AFTER =	213
    PARAM_EG_BIAS_WHEEL =	214
    PARAM_EG_BIAS_BREATH =	215
    PARAM_EG_BIAS_FOOT =	216
    """ PITCH """
    PARAM_PITCH_AFTER =	217
    PARAM_PITCH_BREATH =	218
    PARAM_PITCH_FOOT =	219
    PARAM_PITCH_RND =	220

    """ ARPEGGIATOR """
    PARAM_ARP_MODE	= 450
    PARAM_ARP_TEMPO	= 451
    PARAM_ARP_MUL	= 453
    PARAM_ARP_OCTAVES	= 454	
    
    """ PERF CONTROLS """
    PARAM_PERF_CTL_1H	= 420
    PARAM_PERF_CTL_1L	= 421
    PARAM_PERF_CTL_2H	= 422
    PARAM_PERF_CTL_2L	= 423
    PARAM_PERF_CTL_3H	= 424
    PARAM_PERF_CTL_3L	= 425
    PARAM_PERF_CTL_4H	= 426
    PARAM_PERF_CTL_4L	= 427
    
    """ ======== OTHER ======== """
    PARAM_BEND_UP	= 172
    PARAM_BEND_DN	= 173
    PARAM_TRANSPOSE	= 174
    PARAM_VOLUME	= 180
    PARAM_PAN	= 221
    PARAM_VELO_OFFSET	= 242
    PARAM_EG_RESTART	= 246
    PARAM_LEGATO	= 228
    PARAM_PORTA_MODE	= 229
    PARAM_PORTA_TIME	= 230
    PARAM_TUNING	= 251
    PARAM_OUTPUT	= 411
    PARAM_GAIN	= 412
    PARAM_WAVE_SET	= 252


    """ ======== EFFECTS ======== """
    """ BITCRUSHER """
    PARAM_BIT_DEPTH = 380	
    
    """ DECIMATOR """
    PARAM_DECI_DEPTH	= 370	
    
    """ FILTER """
    PARAM_FILTER_LO = 320
    PARAM_FILTER_HI = 321
    
    """ CHORUS/FLANGER """
    PARAM_CHORUS_DRY = 360
    PARAM_CHORUS_WET = 361
    PARAM_CHORUS_MODE = 362
    PARAM_CHORUS_SPEED = 363
    PARAM_CHORUS_DEPTH = 364
    PARAM_CHORUS_FEEDBACK = 365
    PARAM_CHORUS_LR_PHASE = 366
    
    """ PHASER """
    PARAM_PHASER_DRY = 310	
    PARAM_PHASER_WET = 311	
    PARAM_PHASER_MODE = 312	#0=MONO, 1=STEREO, 2=CROSS
    PARAM_PHASER_SPEED = 314	
    PARAM_PHASER_DEPTH = 313	
    PARAM_PHASER_FEEDBACK = 315	
    PARAM_PHASER_OFFSET = 316	
    PARAM_PHASER_STAGES = 317	
    PARAM_PHASER_LR_PHASE = 318	#*does nothing on mono
    
    """ AM """
    PARAM_AM_DEPTH	= 332
    PARAM_AM_SPEED	= 330
    PARAM_AM_RANGE	= 331
    PARAM_AM_LR_PHASE	= 333
    
    """ DELAY """
    PARAM_DELAY_DRY = 300	# no effect
    PARAM_DELAY_WET = 301	# full effect
    PARAM_DELAY_MODE = 302 # 0 = STEREO, 1 = CROSS, 2 = BOUNCE
    PARAM_DELAY_TIME = 303	
    PARAM_DELAY_FEEDBACK = 304
    PARAM_DELAY_LO = 305	
    PARAM_DELAY_HI = 306	
    PARAM_DELAY_TEMPO = 307 # 50-255
    PARAM_DELAY_MUL = 308	
    PARAM_DELAY_DIV = 309	
    
    """ FX ROUTING 
    # 0 = Bitcrusher → Decimator → Filter → Chorus → Phaser → AM → Delay
    # 1 = Bitcrusher → Decimator → Filter → Delay → Chorus → Phaser → AM
    """
    PARAM_ROUTING = 410
    
    
    """ REVERB """
    PARAM_REVERB_DRY	= 390
    PARAM_REVERB_WET	= 391
    PARAM_REVERB_MODE	= 392 # 0 = PLATE, 1 = HALL
    PARAM_REVERB_DECAY	= 393
    PARAM_REVERB_DAMP	= 394
    
    
    
class XFM2_Unit():
    """ The pipeline of xfm2 has two units, each with 512 bytes of data.
    Each unit is capable of loading it own patch data with 32 voice polyphony. That's 64 voices in total."""
    def __init__(self) -> None:
        self.unit_patload = bytearray(512)
        
        kInitFb = self.convert_percentage_to_byte(50)
        
        
        """ 32 Algorithms from the DX7, converted to XFM2 
        [Oscillator Routing 1-6], [Self-Feedback Level 1-6]
        [OSC1, OSC2, OSC3, OSC4, OSC5, OSC6], [FB1, FB2, FB3, FB4, FB5, FB6]
        """
        self.xfm2_dx7algos = [
            [[5,0,17,32,64,0],[0,0,0,0,0,kInitFb]],
            [[5,0,17,32,64,0],[0,kInitFb,0,0,0,0]],
            [[5,8,0,33,64,0],[0,0,0,0,0,kInitFb]],
            [[5,8,0,33,64,0],[0,0,0,0,0,kInitFb]],
            [[5,0,17,0,65,0],[0,0,0,0,0,kInitFb]],
            [[5,0,17,0,65,0],[0,0,0,0,0,kInitFb]],
            [[5,0,49,0,64,0],[0,0,0,0,0,kInitFb]],
            [[5,0,49,0,64,0],[0,0,0,kInitFb,0,0]],
            [[5,0,49,0,64,0],[0,kInitFb,0,0,0,0]],
            [[5,8,0,97,0,0],[0,0,kInitFb,0,0,0]],
            [[5,8,0,97,0,0],[0,0,0,0,0,kInitFb]],
            [[5,0,113,0,0,0],[0,kInitFb,0,0,0,0]],
            [[5,0,113,0,0,0],[0,0,0,0,0,kInitFb]],
            [[5,0,17,96,0,0],[0,0,0,0,0,kInitFb]],
            [[5,0,17,96,0,0],[0,kInitFb,0,0,0,0]],
            [[45,0,16,0,64,0],[0,0,0,0,0,kInitFb]],
            [[45,0,16,0,64,0],[0,kInitFb,0,0,0,0]],
            [[29,0,0,32,64,0],[0,0,kInitFb,0,0,0]],
            [[5,8,0,65,65,0],[0,0,0,0,0,kInitFb]],
            [[9,9,0,65,64,0],[0,0,kInitFb,0,0,0]],
            [[9,9,0,65,65,0],[0,0,kInitFb,0,0,0]],
            [[5,0,65,65,65,0],[0,0,0,0,0,kInitFb]],
            [[1,9,0,65,65,0],[0,0,0,0,0,kInitFb]],
            [[1,1,65,65,65,0],[0,0,0,0,0,kInitFb]],
            [[1,1,1,65,65,0],[0,0,0,0,0,kInitFb]],
            [[1,9,0,97,0,0],[0,0,0,0,0,kInitFb]],
            [[1,9,0,97,0,0],[0,0,kInitFb,0,0,0]],
            [[5,0,17,32,0,1],[0,0,0,0,kInitFb,0]],
            [[1,1,17,0,65,0],[0,0,0,0,0,kInitFb]],
            [[1,1,17,32,0,1],[0,0,0,0,kInitFb,0]],
            [[1,1,1,1,65,0],[0,0,0,0,0,kInitFb]],
            [[1,1,1,1,1,1],[0,0,0,0,0,kInitFb]],
        ]
        
    def convert_percentage_to_byte(self, value):
        value = int(value * 255 / 100)
        return value
        
    def set_dx7_algorithm(self, algorithm):
        if algorithm < 1 or algorithm > 32:
            raise ValueError("Algorithm should be between 1 and 32.")
        
        self.unit_patload[XFM2_PARAM.PARAM_OP_ALGO[XFM2_PARAM.OP1]-1:XFM2_PARAM.PARAM_OP_ALGO[XFM2_PARAM.OP6]] = self.xfm2_dx7algos[algorithm-1][0]
        self.unit_patload[XFM2_PARAM.PARAM_OP_FEEDBACK[XFM2_PARAM.OP1]-1:XFM2_PARAM.PARAM_OP_FEEDBACK[XFM2_PARAM.OP6]] = self.xfm2_dx7algos[algorithm-1][1]
    
    def init_unit(self):
        self.unit_patload = bytearray(512)
        self.set_dx7_algorithm(1)
        
        p = self.unit_patload
        
        # Reset operators
        for op in range(1, 7):
            p[XFM2_PARAM.PARAM_OP_SYNC] = 0
            p[XFM2_PARAM.PARAM_OP_PHASE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_RATIO[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_RATIO_FINE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_FINE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_LEVEL[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_LEVEL_L[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_LEVEL_R[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_VELO_SENS[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_KEY_BP[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_KEY_LDEPTH[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_KEY_RDEPTH[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_KEY_LCURVE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_KEY_RCURVE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L0[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L1[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L2[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L3[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L4[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_L5[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_DLY[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_R1[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_R2[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_R3[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_R4[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_R5[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_RATE_KEY[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_EG_LOOP] = 0
            p[XFM2_PARAM.PARAM_OP_EG_LOOP_SEG] = 0
            p[XFM2_PARAM.PARAM_OP_AMS[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_PMS[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_WAVE_1[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_WAVE_2[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_W_MODE[op-1]] = 0
            p[XFM2_PARAM.PARAM_OP_W_RATIO[op-1]] = 0
        
        """ PITCH EG (Envelope Generator)"""
        p[XFM2_PARAM.PARAM_PITCH_EG] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L0] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L1] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L2] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L3] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L4] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_L5] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_DLY] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_R1] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_R2] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_R3] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_R4] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_R5] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_RATE_KEY] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_RANGE] = 0
        p[XFM2_PARAM.PARAM_PITCH_EG_VELO] = 0

        """ LFO (Low Frequency Oscillator)"""
        p[XFM2_PARAM.PARAM_LFO_WAVE] = 0 
        p[XFM2_PARAM.PARAM_LFO_SPEED] = 0 
        p[XFM2_PARAM.PARAM_LFO_SYNC] = 0 
        p[XFM2_PARAM.PARAM_LFO_FADE] = 0 
        p[XFM2_PARAM.PARAM_LFO_DEPTH_PITCH] = 0 
        p[XFM2_PARAM.PARAM_LFO_DEPTH_AMP] = 0 

        """ ======== MODULATIONS ======== """
        """ PITCH LFO """
        p[XFM2_PARAM.PARAM_PITCH_LFO_AFTER] = 0
        p[XFM2_PARAM.PARAM_PITCH_LFO_WHEEL] = 0
        p[XFM2_PARAM.PARAM_PITCH_LFO_BREATH] = 0
        p[XFM2_PARAM.PARAM_PITCH_LFO_FOOT] = 0
        """ AMP LFO """
        p[XFM2_PARAM.PARAM_AMP_LFO_AFTER] = 0
        p[XFM2_PARAM.PARAM_AMP_LFO_WHEEL] = 0
        p[XFM2_PARAM.PARAM_AMP_LFO_BREATH] = 0
        p[XFM2_PARAM.PARAM_AMP_LFO_FOOT] = 0
        """ EG BIAS """
        p[XFM2_PARAM.PARAM_EG_BIAS_AFTER] = 0
        p[XFM2_PARAM.PARAM_EG_BIAS_WHEEL] = 0
        p[XFM2_PARAM.PARAM_EG_BIAS_BREATH] = 0
        p[XFM2_PARAM.PARAM_EG_BIAS_FOOT] = 0
        """ PITCH """
        p[XFM2_PARAM.PARAM_PITCH_AFTER] = 0
        p[XFM2_PARAM.PARAM_PITCH_BREATH] = 0
        p[XFM2_PARAM.PARAM_PITCH_FOOT] = 0
        p[XFM2_PARAM.PARAM_PITCH_RND] = 0

        """ ARPEGGIATOR """
        p[XFM2_PARAM.PARAM_ARP_MODE] = 0
        p[XFM2_PARAM.PARAM_ARP_TEMPO] = 0
        p[XFM2_PARAM.PARAM_ARP_MUL] = 0
        p[XFM2_PARAM.PARAM_ARP_OCTAVES] = 0
        
        """ PERF CONTROLS """
        p[XFM2_PARAM.PARAM_PERF_CTL_1H] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_1L] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_2H] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_2L] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_3H] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_3L] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_4H] = 0
        p[XFM2_PARAM.PARAM_PERF_CTL_4L] = 0
        
        """ ======== OTHER ======== """
        p[XFM2_PARAM.PARAM_BEND_UP]	= 0
        p[XFM2_PARAM.PARAM_BEND_DN]	= 0
        p[XFM2_PARAM.PARAM_TRANSPOSE] = 0
        p[XFM2_PARAM.PARAM_VOLUME]	= 0
        p[XFM2_PARAM.PARAM_PAN]	= 0
        p[XFM2_PARAM.PARAM_VELO_OFFSET]	= 0
        p[XFM2_PARAM.PARAM_EG_RESTART] = 0
        p[XFM2_PARAM.PARAM_LEGATO] = 0
        p[XFM2_PARAM.PARAM_PORTA_MODE] = 0
        p[XFM2_PARAM.PARAM_PORTA_TIME] = 0
        p[XFM2_PARAM.PARAM_TUNING] = 0
        p[XFM2_PARAM.PARAM_OUTPUT] = 0
        p[XFM2_PARAM.PARAM_GAIN] = 0
        p[XFM2_PARAM.PARAM_WAVE_SET] = 0


        """ ======== EFFECTS ======== """
        """ BITCRUSHER """
        p[XFM2_PARAM.PARAM_BIT_DEPTH] = 0	
        
        """ DECIMATOR """
        p[XFM2_PARAM.PARAM_DECI_DEPTH] = 0
        
        """ FILTER """
        p[XFM2_PARAM.PARAM_FILTER_LO] = 0
        p[XFM2_PARAM.PARAM_FILTER_HI] = 0
        
        """ CHORUS/FLANGER """
        p[XFM2_PARAM.PARAM_CHORUS_DRY] = 0
        p[XFM2_PARAM.PARAM_CHORUS_WET] = 0
        p[XFM2_PARAM.PARAM_CHORUS_MODE] = 0
        p[XFM2_PARAM.PARAM_CHORUS_SPEED] = 0
        p[XFM2_PARAM.PARAM_CHORUS_DEPTH] = 0
        p[XFM2_PARAM.PARAM_CHORUS_FEEDBACK] = 0
        p[XFM2_PARAM.PARAM_CHORUS_LR_PHASE] = 0
        
        """ PHASER """
        p[XFM2_PARAM.PARAM_PHASER_DRY] = 0
        p[XFM2_PARAM.PARAM_PHASER_WET] = 0
        p[XFM2_PARAM.PARAM_PHASER_MODE] = 0
        p[XFM2_PARAM.PARAM_PHASER_SPEED] = 0
        p[XFM2_PARAM.PARAM_PHASER_DEPTH] = 0
        p[XFM2_PARAM.PARAM_PHASER_FEEDBACK] = 0
        p[XFM2_PARAM.PARAM_PHASER_OFFSET] = 0
        p[XFM2_PARAM.PARAM_PHASER_STAGES] = 0
        p[XFM2_PARAM.PARAM_PHASER_LR_PHASE] = 0
        
        """ AM """
        p[XFM2_PARAM.PARAM_AM_DEPTH] = 0
        p[XFM2_PARAM.PARAM_AM_SPEED] = 0
        p[XFM2_PARAM.PARAM_AM_RANGE] = 0
        p[XFM2_PARAM.PARAM_AM_LR_PHASE] = 0
    
        """ DELAY """
        p[XFM2_PARAM.PARAM_DELAY_DRY] = 0
        p[XFM2_PARAM.PARAM_DELAY_WET] = 0
        p[XFM2_PARAM.PARAM_DELAY_MODE] = 0
        p[XFM2_PARAM.PARAM_DELAY_TIME] = 0
        p[XFM2_PARAM.PARAM_DELAY_FEEDBACK] = 0
        p[XFM2_PARAM.PARAM_DELAY_LO] = 0
        p[XFM2_PARAM.PARAM_DELAY_HI] = 0
        p[XFM2_PARAM.PARAM_DELAY_TEMPO] = 0
        p[XFM2_PARAM.PARAM_DELAY_MUL] = 0
        p[XFM2_PARAM.PARAM_DELAY_DIV] = 0
    
        """ FX ROUTING """
        p[XFM2_PARAM.PARAM_ROUTING] = 0
    
        """ REVERB """
        p[XFM2_PARAM.PARAM_REVERB_DRY] = 0
        p[XFM2_PARAM.PARAM_REVERB_WET] = 0
        p[XFM2_PARAM.PARAM_REVERB_MODE] = 0
        p[XFM2_PARAM.PARAM_REVERB_DECAY] = 0
        p[XFM2_PARAM.PARAM_REVERB_DAMP] = 0
    
    
            

    def print_unit(self):
        print(self.unit_patload)
        pass

class XFM2_Patch():
    
    """Contains the data of a single patch, with two units."""
    
    def __init__(self, patch_data_json):
        self.patch_data = patch_data_json
        self.operators = []
        self.parse_patch_data()


    def check_range(self, value, min_value, max_value):
        if value < min_value or value > max_value:
            raise ValueError(f"Value should be between {min_value} and {max_value}.")

    def check_legal_vaule(self, key, value):
        """ Page 9 """
        if key == XFM2_PARAM.PARAM_OP_WAVE_1 or key == XFM2_PARAM.PARAM_OP_WAVE_2:
            self.check_range(value, 0, 7)
        if key == XFM2_PARAM.PARAM_OP_W_MODE:
            self.check_range(value, 0, 1)
        if key == XFM2_PARAM.PARAM_OP_ALGO:
            pass
        if key == XFM2_PARAM.PARAM_OP_FEEDBACK:
            pass
            
        
        
        
        
        pass
    
    def parse_patch_data(self):
        for operator in range(1, 5):
            operator_params = {}
            operator_params["Oscillator detune"] = self.patch_data[f"Operator {operator}"]["Oscillator detune"]
            operator_params["Oscillator rate scale"] = self.patch_data[f"Operator {operator}"]["Oscillator rate scale"]
            operator_params["Key velocity sensitivity"] = self.patch_data[f"Operator {operator}"]["Key velocity sensitivity"]
            operator_params["Amplitude modulation sensitivity"] = self.patch_data[f"Operator {operator}"]["Amplitude modulation sensitivity"]
            operator_params["Output level"] = self.patch_data[f"Operator {operator}"]["Output level"]
            operator_params["Coarse frequency"] = self.patch_data[f"Operator {operator}"]["Coarse frequency"]
            operator_params["Oscillator mode"] = self.patch_data[f"Operator {operator}"]["Oscillator mode"]
            operator_params["Fine frequency"] = self.patch_data[f"Operator {operator}"]["Fine frequency"]
            operator_params["Combined frequency (as displayed)"] = self.patch_data[f"Operator {operator}"]["Combined frequency (as displayed)"]
            operator_params["Pitch EG Rate 1"] = self.patch_data[f"Operator {operator}"]["Pitch EG Rate 1"]
            operator_params["Pitch EG Rate 2"] = self.patch_data[f"Operator {operator}"]["Pitch EG Rate 2"]
            operator_params["Pitch EG Rate 3"] = self.patch_data[f"Operator {operator}"]["Pitch EG Rate 3"]
            operator_params["Pitch EG Rate 4"] = self.patch_data[f"Operator {operator}"]["Pitch EG Rate 4"]
            operator_params["Pitch EG Level 1"] = self.patch_data[f"Operator {operator}"]["Pitch EG Level 1"]
            operator_params["Pitch EG Level 2"] = self.patch_data[f"Operator {operator}"]["Pitch EG Level 2"]
            operator_params["Pitch EG Level 3"] = self.patch_data[f"Operator {operator}"]["Pitch EG Level 3"]
            operator_params["Pitch EG Level 4"] = self.patch_data[f"Operator {operator}"]["Pitch EG Level 4"]
            self.operators.append(operator_params)
        
        self.algorithm = self.patch_data["Algorithm"]
        self.oscillator_key_sync = self.patch_data["Oscillator key sync"]
        self.lfo_speed = self.patch_data
        
        
u = XFM2_Unit()
u.set_dx7_algorithm(8)

u.init_unit()
u.print_unit()
        
