// Kelas turunan Clothing
class Clothing extends Product {
    protected String size;
    protected String material;
    protected String gender;

    // Konstruktor
    public Clothing(int idProduct, String name, String brand, double price, String size, String material, String gender) {
        super(idProduct, name, brand, price);
        this.size = size;
        this.material = material;
        this.gender = gender;
    }

    public String getSize() {
        return size;
    }

    public String getMaterial() {
        return material;
    }

    public String getGender() {
        return gender;
    }
}

