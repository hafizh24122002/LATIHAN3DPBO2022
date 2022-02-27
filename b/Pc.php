<?php declare(strict_types = 1);

class Pc
{
	private Processor $ProcObj;
	private Disk $DiskObj;
	private Ram $RamObj;

	public function __construct($ProcObj, $DiskObj, $RamObj)
	{
		$this->ProcObj = $ProcObj;
		$this->DiskObj = $DiskObj;
		$this->RamObj =  $RamObj;
	}

	public function setProcessor(Processor $ProcObj): void { $this->ProcObj = $ProcObj; }
	public function setDisk(Disk $DiskObj): void { $this->DiskObj = $DiskObj; }
	public function setRam(Ram $RamObj): void { $this->RamObj = $RamObj; }

	public function getProcessor(): Processor { return $this->ProcObj; }
	public function getDisk(): Disk { return $this->DiskObj; }
	public function getRam(): Ram { return $this->RamObj; }

	public function printPc()
	{
		$this->ProcObj->printProcessor();
		$this->DiskObj->printDisk();
		$this->RamObj->printRam();
	}
}

?>