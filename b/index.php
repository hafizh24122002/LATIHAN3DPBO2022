<?php

include "Processor.php";
include "Disk.php";
include "Ram.php";
include "Pc.php";

// enum is only supported on PHP version 8 >= 8.1.0!
// -> (DiskType)

$ProcObj = new Processor("I3", 300);
$DiskObj = new Disk(DiskType::HDD, 250, 200);
$RamObj = new Ram(8, 125);

$PcObj = new Pc($ProcObj, $DiskObj, $RamObj);
$PcObj->printPc();

?>