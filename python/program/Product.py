class Product:
    def __init__(self, idProduct, name, brand, price):
        self.idProduct = idProduct
        self.name = name
        self.brand = brand
        self.price = price

    def getId(self):
        return self.idProduct

    def getName(self):
        return self.name

    def getBrand(self):
        return self.brand

    def getPrice(self):
        return self.price
