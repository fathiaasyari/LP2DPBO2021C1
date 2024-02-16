import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Shirt> list = new ArrayList<>();

        System.out.print("Masukkan jumlah data yang ingin dimasukkan: ");
        int jumlahData = scanner.nextInt();
        scanner.nextLine(); //ini untuk bersihin newline

        // input data shirt dari user
        for (int i = 0; i < jumlahData; i++) {
            System.out.println("Masukkan informasi Shirt ke-" + (i + 1) + ":");
            System.out.print("ID Product (3 digit): ");
            int idProduct = scanner.nextInt();
            scanner.nextLine(); //ini untuk bersihin newline
            System.out.print("Nama Product: ");
            String name = scanner.nextLine();
            System.out.print("Merek: ");
            String brand = scanner.nextLine();
            System.out.print("Harga: Rp");
            double harga = scanner.nextDouble();
            scanner.nextLine(); 
            System.out.print("Ukuran: ");
            String size = scanner.nextLine();
            System.out.print("Bahan: ");
            String material = scanner.nextLine();
            System.out.print("Gender: ");
            String gender = scanner.nextLine();
            System.out.print("Warna: ");
            String color = scanner.nextLine();
            System.out.print("Tipe Sleeve: ");
            String sleeveType = scanner.nextLine();

            Shirt shirt = new Shirt(idProduct, name, brand, harga, size, material, gender, color, sleeveType);

            list.add(shirt);
        }

        System.out.println("--------------------------------------------------------------------------------------------------------------------------------");
        System.out.println("                                                          Data Shirt                                                            ");
        System.out.println("--------------------------------------------------------------------------------------------------------------------------------");
        System.out.printf("| %-3s | %-3s | %-20s | %-10s | %-12s | %-6s | %-10s | %-10s | %-10s | %-15s |\n", "No","Id", "Nama Product", "Merek", "Harga", "Ukuran", "Bahan", "Warna","Gender", "Tipe Sleeve");
        System.out.println("--------------------------------------------------------------------------------------------------------------------------------");
        for (int t = 0; t < list.size(); t++) {
            Shirt shirt = list.get(t);
            System.out.printf("| %-3s | %-3d | %-20s | %-10s | Rp%-10.3f | %-6s | %-10s | %-10s | %-10s | %-15s |\n",
                    t + 1, shirt.getId(), shirt.getName(), shirt.getBrand(), shirt.getPrice(), shirt.getSize(), shirt.getMaterial(),
                    shirt.getColor(), shirt.getGender(), shirt.getSleeveType());
        }
        System.out.println("--------------------------------------------------------------------------------------------------------------------------------");

        scanner.close();
    }
}