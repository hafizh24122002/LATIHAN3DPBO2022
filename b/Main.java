public class Main
{
	public static void main(String[] args)
	{
		Processor ProcObj = new Processor("I3", 300);
		Disk DiskObj = new Disk(DiskType.HDD, 250, 200);
		Ram RamObj = new Ram(8, 125);

		Pc PcObj = new Pc(ProcObj, DiskObj, RamObj);
		PcObj.printPc();
	}
}