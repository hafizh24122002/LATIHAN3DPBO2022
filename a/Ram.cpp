class Ram
{
	private:
		int capacity;
		int price;

	public:
		// construct
		Ram(int capacity, int price)
		{
			this->capacity = capacity;
			this->price = price;
		}

		//default construct
		Ram(){}

		void setCapacity(int capacity) { this->capacity = capacity; }
		void setPrice(int price) { this->price = price; }

		int getCapacity() { return this->capacity; }
		int getPrice() { return this->price; }

		void printRam()
		{
			cout << "Kapasitas RAM : " << this->capacity << endl;
			cout << "Harga RAM : " << this->price << endl;
		}

		// deconstruct
		~Ram(){}
};