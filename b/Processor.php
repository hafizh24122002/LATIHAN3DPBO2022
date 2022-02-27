<?php declare(strict_types=1);

class Processor
{
	private string $name;
	private int $price;

	public function __construct(string $name, int $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function setName(string $name): void { $this->name = $name; }
	public function setPrice(int $price): void { $this->price = $price; }

	public function getName(): string { return $this->name; }
	public function getPrice(): int { return $this->price; }

	public function printProcessor()
	{
		echo "Nama Processor : " . $this->name . "<br>";
		echo "Harga Processor : " . $this->price . "<br>";
	}
}

?>