class Pc
{
	private Processor ProcObj;
	private Disk DiskObj;
	private Ram RamObj;

	// construct
	public Pc(Processor ProcObj, Disk DiskObj, Ram RamObj)
	{
		this.ProcObj = ProcObj;
		this.DiskObj = DiskObj;
		this.RamObj = RamObj;
	}

	// default construct
	public Pc(){}

	public void setProcessor(Processor ProcObj) { this.ProcObj = ProcObj; }
	public void setDisk(Disk DiskObj) { this.DiskObj = DiskObj; }
	public void setRam(Ram RamObj) { this.RamObj = RamObj; }

	public Processor getProcessor() { return this.ProcObj; }
	public Disk getDisk() { return this.DiskObj; }
	public Ram getRam() { return this.RamObj; }

	public void printPc()
	{
		ProcObj.printProcessor();
		DiskObj.printDisk();
		RamObj.printRam();
	}
}