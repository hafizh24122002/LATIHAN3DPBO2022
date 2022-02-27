from enum import Enum

DiskType = Enum('SSD', 'HDD')

class Disk():
	__type: Enum
	__capacity: int
	__price: int

	def __init__(self, type:DiskType, capacity:int, price:int):
		self.__type = type
		self.__capacity = capacity
		self.__price = price

	def setType(self, type:DiskType): self.__type = type
	def setCapacity(self, capacity:int): self.__capacity = capacity
	def setPrice(self, price:int): self.__price = price

	def getType(self): return self.__type
	def getCapacity(self): return self.__capacity
	def getPrice(self): return self.__price

	def printDisk(self):
		print("Tipe Disk : ", self.__type)
		print("Kapasitas Disk : ", self.__capacity)
		print("Harga Disk : ", self.__price)