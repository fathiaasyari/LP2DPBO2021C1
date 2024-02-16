
public class Shirt extends Clothing {
    protected String color;
    protected String sleeveType;

    // Konstruktor
    public Shirt(int idProduct, String name, String brand, double price, String size, String material, String gender, String color, String sleeveType) {
        super(idProduct, name, brand, price, size, material, gender);
        this.color = color;
        this.sleeveType = sleeveType;
    }

    public String getColor() {
        return color;
    }

    public String getSleeveType() {
        return sleeveType;
    }
}
