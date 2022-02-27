class Ram():
	__capacity: int
	__price: int

	def __init__(self, capacity:int, price:int):
		self.__capacity = capacity
		self.__price = price

	def setCapacity(self, capacity:int): self.__capacity = capacity
	def setPrice(self, Price:int): self.__price = Price

	def getCapacity(self): return self.__capacity
	def getPrice(self): return self.__price

	def printRam(self):
		print("Kapasitas RAM : ", self.__capacity)
		print("Harga RAM : ", self.__price)