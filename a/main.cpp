#include <iostream>
#include <string>

using namespace std;

#include "Processor.cpp"
#include "Disk.cpp"
#include "Ram.cpp"
#include "Pc.cpp"

int main()
{
	Processor ProcObj("I3", 300);
	Disk DiskObj(SSD, 250, 200);
	Ram RamObj(8, 125);

	Pc PcObj(ProcObj, DiskObj, RamObj);
	PcObj.printPc();

	return 0;
}