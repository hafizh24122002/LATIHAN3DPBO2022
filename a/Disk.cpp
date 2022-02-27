enum DiskType{SSD, HDD};

class Disk
{
	private:
		DiskType type;
		int capacity;
		int price;
	
	public:
		// construct
		Disk(DiskType type, int capacity, int price)
		{
			this->type = type;
			this->capacity = capacity;
			this->price = price;
		}

		// default construct
		Disk(){}

		void setType(DiskType type) { this->type = type; }
		void setCapacity(int capacity) { this->capacity = capacity; }
		void setPrice(int price) { this->price = price; }

		DiskType getType() { return this->type; }
		int getCapacity() { return this->capacity; }
		int getPrice() { return this->price; }

		void printDisk()
		{
			switch (this->type)
			{
			case 0:
				cout << "Tipe Disk : SSD" << endl;
				break;
			
			case 1:
				cout << "Tipe Disk : HDD" << endl;
				break;
			}
			cout << "Kapasitas Disk : " << this->capacity << endl;
			cout << "Harga Disk : " << this->price << endl;
		}

		// deconstruct
		~Disk(){}
};