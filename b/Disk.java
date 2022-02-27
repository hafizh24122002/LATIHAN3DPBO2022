enum DiskType{SSD, HDD};

class Disk
{
	private DiskType type;
	private int capacity;
	private int price;

	// construct
	public Disk(DiskType type, int capacity, int price)
	{
		this.type = type;
		this.capacity = capacity;
		this.price = price;
	}

	// default construct
	public Disk(){}

	public void setType(DiskType type) { this.type = type; }
	public void setCapacity(int capacity) { this.capacity = capacity; }
	public void setPrice(int price) { this.price = price; }

	public DiskType getType() { return this.type; }
	public int getCapacity() { return this.capacity; }
	public int getPrice() { return this.price; }

	public void printDisk()
	{
		System.out.println("Tipe Disk : " + this.type);
		System.out.println("Kapasitas Disk : " + this.capacity);
		System.out.println("Harga Disk : " + this.price);
	}
}