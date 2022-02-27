class Processor():
	__name: str
	__price: int

	def __init__(self, name:str, price:int):
		self.__name = name
		self.__price = price

	def setName(self, name:str): self.__name = name
	def setPrice(self, price:int): self.__price = price

	def getName(self): return self.__name
	def getPrice(self): return self.__price

	def printProcessor(self):
		print("Nama Processor : ", self.__name)
		print("Harga Processor : ", self.__price)