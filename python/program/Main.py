from Shirt import Shirt

list = []

jumlahData = int(input("Masukkan jumlah data yang ingin dimasukkan: "))

for i in range(jumlahData):
    print("Masukkan informasi Shirt ke-" + str(i + 1) + ":")
    idProduct = int(input("ID Product (3 digit): "))
    name = input("Nama Product: ")
    brand = input("Merek: ")
    harga = float(input("Harga: Rp"))
    size = input("Ukuran: ")
    material = input("Bahan: ")
    gender = input("Gender: ")
    color = input("Warna: ")
    sleeveType = input("Tipe Sleeve: ")

    shirt = Shirt(idProduct, name, brand, harga, size, material, gender, color, sleeveType)
    list.append(shirt)

print("--------------------------------------------------------------------------------------------------------------------------------")
print("                                                          Data Shirt                                                            ")
print("--------------------------------------------------------------------------------------------------------------------------------")
print("| %-3s | %-3s | %-20s | %-10s | %-12s | %-6s | %-10s | %-10s | %-10s | %-15s |" % ("No", "Id", "Nama Product", "Merek", "Harga", "Ukuran", "Bahan", "Warna", "Gender", "Tipe Sleeve"))
print("--------------------------------------------------------------------------------------------------------------------------------")
for t in range(len(list)):
    shirt = list[t]
    print("| %-3s | %-3d | %-20s | %-10s | Rp%-10.3f | %-6s | %-10s | %-10s | %-10s | %-15s |" %
          (t + 1, shirt.getId(), shirt.getName(), shirt.getBrand(), shirt.getPrice(), shirt.getSize(), shirt.getMaterial(),
           shirt.getColor(), shirt.getGender(), shirt.getSleeveType()))
print("--------------------------------------------------------------------------------------------------------------------------------")
