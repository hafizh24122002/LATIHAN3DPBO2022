<?php declare(strict_types=1);

// enum is only supported on PHP version 8 >= 8.1.0!
enum DiskType
{
	case SSD;
	case HDD;
}

class Disk
{
	private DiskType $type;
	private int $capacity;
	private int $price;

	public function __construct(DiskType $type, int $capacity, int $price)
	{
		$this->type = $type;
		$this->capacity = $capacity;
		$this->price = $price;
	}

	public function setType(DiskType $type): void { $this->type = $type; }
	public function setCapacity(int $capacity): void { $this->capacity = $capacity; }
	public function setPrice(int $price): void { $this->price = $price; }

	public function getType(): DiskType { return $this->type; }
	public function getCapacity(): int { return $this->capacity; }
	public function getPrice(): int { return $this->price; }

	public function printDisk()
	{
		switch($this->type)
		{
			case DiskType::SSD:
				echo "Tipe Disk : SSD" . "<br>";
				break;
			case DiskType::HDD:
				echo "Tipe Disk : HDD" . "<br>";
		}
		echo "Kapasitas Disk : " . $this->capacity . "<br>";
		echo "Harga Disk : " . $this->price . "<br>";
	}
}

?>