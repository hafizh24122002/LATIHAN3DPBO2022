<?php declare(strict_types=1);

class Ram
{
	private int $capacity;
	private int $price;

	public function __construct(int $capacity, int $price)
	{
		$this->capacity = $capacity;
		$this->price = $price;
	}

	public function setCapacity(int $capacity): void { $this->capacity = $capacity; }
	public function setPrice(int $price): void { $this->price = $price; }

	public function getCapacity(): int { return $this->capacity; }
	public function getPrice(): int { return $this->price; }

	public function printRam()
	{
		echo "Kapasitas RAM : " . $this->capacity . "<br>";
		echo "Harga RAM : " . $this->price . "<br>";
	}
}

?>