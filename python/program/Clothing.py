from Product import Product

class Clothing(Product):
    def __init__(self, idProduct, name, brand, price, size, material, gender):
        super().__init__(idProduct, name, brand, price)
        self.size = size
        self.material = material
        self.gender = gender

    def getSize(self):
        return self.size

    def getMaterial(self):
        return self.material

    def getGender(self):
        return self.gender
