
public class Product {
    protected int idProduct;
    protected String name;
    protected String brand;
    protected double price;

    // Konstruktor
    public Product(int idProduct, String name, String brand, double price) {
        this.idProduct = idProduct;
        this.name = name;
        this.brand = brand;
        this.price = price;
    }

    public int getId() {
        return idProduct;
    }

    public String getName() {
        return name;
    }

    public String getBrand() {
        return brand;
    }

    public double getPrice() {
        return price;
    }
}

