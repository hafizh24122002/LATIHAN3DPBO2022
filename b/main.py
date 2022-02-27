# only importing modules to avoid circular import
import Processor
import Disk
import Ram
import Pc

def main():
	ProcObj = Processor.Processor("I3", 300)
	DiskObj = Disk.Disk("HDD", 250, 200)
	RamObj = Ram.Ram(8, 125)

	PcObj = Pc.Pc(ProcObj, DiskObj, RamObj)
	PcObj.printPc()

if __name__ == "__main__":
	main()