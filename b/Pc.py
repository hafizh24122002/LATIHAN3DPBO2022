# importing from main for objects definition
from main import *

class Pc():
	__ProcObj: Processor
	__DiskObj: Disk
	__RamObj: Ram

	def __init__(self, procObj:Processor, DiskObj:Disk, RamObj:Ram):
		self.__ProcObj = procObj
		self.__DiskObj = DiskObj
		self.__RamObj = RamObj

	def setProcessor(self, ProcObj:Processor): self.__ProcObj = ProcObj
	def setDisk(self, DiskObj:Disk): self.__DiskObj = DiskObj
	def setRam(self, RamObj:Ram): self.__RamObj = RamObj

	def getProcessor(self): return self.__ProcObj
	def getDisk(self): return self.__DiskObj
	def getRam(self): return self.__RamObj

	def printPc(self):
		self.__ProcObj.printProcessor()
		self.__DiskObj.printDisk()
		self.__RamObj.printRam()