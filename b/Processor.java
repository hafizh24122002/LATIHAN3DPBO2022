class Processor
{
	private String name;
	private int price;

	// construct
	public Processor(String name, int price)
	{
		this.name = name;
		this.price = price;
	}

	// defalut construct
	public Processor(){}

	public void setName(String name) { this.name = name; }
	public void setPrice(int price) { this.price = price; }
	
	public String getName() { return this.name; }
	public int getPrice() { return this.price; }

	public void printProcessor()
	{
		System.out.println("Nama Processor : " + this.name);
		System.out.println("Harga Processor : " + this.price);
	}
}