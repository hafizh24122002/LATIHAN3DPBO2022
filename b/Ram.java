class Ram
{
	private int capacity;
	private int price;
	
	// construct
	public Ram(int capacity, int price)
	{
		this.capacity = capacity;
		this.price = price;
	}

	// default construct
	public Ram(){}

	public void setCapacity(int capacity) { this.capacity = capacity; }
	public void setPrice(int price) { this.price = price; }

	public int getCapacity() { return this.capacity; }
	public int getPrice() { return this.price; }

	public void printRam()
	{
		System.out.println("Kapasitas RAM : " + this.capacity);
		System.out.println("Harga RAM : " + this.price);
	}
}