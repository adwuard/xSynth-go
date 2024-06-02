# xSynth-go
Portable FPGA based Synthesizer/DSP processor on Digilent CMOD A7 35T FPGA

# Overview
This project focuses on creating a portable hardware platform for hardware interactions with the XFM2 original created by René Ceballos. The hardware is also designed for portability and scalability in mind. The idea is to, not only
work with XFM2. This is also useful an open hardware for FPGA DSP/Synth development. Capable for audio signal in/out and MIDI in/out. This is scalable for anyone who want to design custom FPGA effect processor, or for anyone who are interested in just learning FPGA signal processing.

# Hardware Build
![Alt Text](images\XFM2-REVA-Baseboard-Snapshot.jpg)

### Key Features:
- Hardware compatible with [XFM DIY Synthesizer](https://www.futur3soundz.com/xfm2/) by René Ceballos
- Powerful [Digilent CMOD A7 35T FPGA](https://digilent.com/shop/cmod-a7-35t-breadboardable-artix-7-fpga-module/)
- MIDI In (Type A)
- MIDI Thru/Out (Type A)
- Line-In/Out 3.5mm Jack
- USB-C Powered
- USB Device mode (capable in `UI FPC connector`)
- All additional pin-outs is wired out to FPC for off board expansions 
- All control pinouts that is needed for hardware UI interface is connected via one FPC

*** Future Supports:
- USB MIDI Device via Type-C
- Hardware UI controller (screen and mechanical keyboard) for user interactions
- Micro-SD card for patch storage.

### 📝 Todos 
- [ ] Validate Rev(A) PCB hardware and reference designs.
- [ ] Design UI board Hardware PCB
- [ ] Make system diagram of the hardware
### ✅ Completed 
- [x] 2024/06 Rev(A) Base DSP PCB design is completed.
 
### Directory
- [Hardware Source Files](.hardware\XFM2-Baseboard-RevA_2024_06_01/)
- [Schematics](hardware\XFM2-Baseboard-RevA_2024_06_01\XFM2-Baseboard_RevA_2024_06_01\XFM2-BASE-BOARD_SCH.pdf)
- [Bill of Materials](hardware\XFM2-Baseboard-RevA_2024_06_01\XFM2-Baseboard_RevA_2024_06_01\XFM2-BASE-BOARD-BOM.xls)

# Acknowledgements  
- [XFM2 DIY Synthesizer](https://www.futur3soundz.com/xfm2/), Project by `René Ceballos`
- References Design from [Adafruit I2S Stereo Decoder - UDA1334A](https://www.adafruit.com/product/3678)
- References Design from [Digilent I2S for Line-In](https://digilent.com/reference/pmod/pmodi2s2/reference-manual)
