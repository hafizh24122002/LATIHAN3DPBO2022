class Processor
{
	private:
		string name;
		int price;

	public:
		// construct
		Processor(string name, int price)
		{
			this->name = name;
			this->price = price;
		}

		// default construct
		Processor(){}

		void setName(string name) { this->name = name; }
		void setPrice(int price) { this->price = price; }

		string getName() { return this->name; }
		int getPrice() { return this->price; }

		void printProcessor()
		{
			cout << "Nama Processor : " << this->name << endl;
			cout << "Harga Processor : " << this->price << endl;
		}

		// deconstruct
		~Processor(){}
};