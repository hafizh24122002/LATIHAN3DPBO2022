class Pc
{
	private:
		Processor ProcObj;
		Disk DiskObj;
		Ram RamObj;

	public:
		// construct
		Pc(Processor ProcObj, Disk DiskObj, Ram RamObj)
		{
			this->ProcObj = ProcObj;
			this->DiskObj = DiskObj;
			this->RamObj = RamObj;
		}

		// default construct
		Pc(){}

		void setProcessor(Processor ProcObj) { this->ProcObj = ProcObj; }
		void setDisk(Disk DiskObj) { this->DiskObj = DiskObj; }
		void setRam(Ram RamObj) { this->RamObj = RamObj; }

		Processor getProcessor() { return this->ProcObj; }
		Disk getDisk() { return this->DiskObj; }
		Ram getRam() { return this->RamObj; }

		void printPc()
		{
			this->ProcObj.printProcessor();
			this->DiskObj.printDisk();
			this->RamObj.printRam();
		}

		// deconstruct
		~Pc(){}
};