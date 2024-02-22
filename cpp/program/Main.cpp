#include <bits/stdc++.h>
#include "Shirt.cpp"

using namespace std;

int main()
{
    
        Shirt satu;
        satu.set_idProduct(213);
        satu.set_name("POSHMINA");
        satu.set_brand("Button");
        satu.set_price(90000);
        satu.set_size("XL");
        satu.set_material("Katun");
        satu.set_gender("Female");
        satu.set_color("Black");
        satu.set_sleeveType("Hijab");

        Shirt dua;
        dua.set_idProduct(923);
        dua.set_name("OMIRA");
        dua.set_brand("Keris");
        dua.set_price(50500);
        dua.set_size("M");
        dua.set_material("Katun");
        dua.set_gender("Female");
        dua.set_color("Pink");
        dua.set_sleeveType("Daster");

        Shirt tiga;
        tiga.set_idProduct(501);
        tiga.set_name("ALAYA");
        tiga.set_brand("Jiniso");
        tiga.set_price(200000);
        tiga.set_size("XL");
        tiga.set_material("Jeans");
        tiga.set_gender("Unisex");
        tiga.set_color("Blue");
        tiga.set_sleeveType("Celana");


    list<Shirt> llist;

    llist.push_back(satu);
    llist.push_back(dua);
    llist.push_back(tiga);

cout << "---------------------------------------------------------------------------------------------------------------" << endl;
cout << "| No | Id Product |   Name    |  Brand  |    Price    |  Size  |  Material  | Gender |  Color  |  Sleeve Type |" << endl;
cout << "---------------------------------------------------------------------------------------------------------------" << endl;

// Iterator
int i = 0;

for (list<Shirt>::iterator it = llist.begin(); it != llist.end(); it++)
{
    cout << "|" << setw(4) << (i + 1) << " |";                      // Nomor
    cout << setw(11) << it->get_idProduct() << " |";               // Id Product
    cout << setw(10) << it->get_name() << " |";                    // Nama
    cout << setw(8) << it->get_brand() << " |";                    // Brand
    cout << setw(12) << it->get_price() << " |";                   // Harga
    cout << setw(7) << it->get_size() << " |";                     // Ukuran
    cout << setw(11) << it->get_material() << " |";                // Bahan
    cout << setw(7) << it->get_gender() << " |";                   // Gender
    cout << setw(8) << it->get_color() << " |";                    // Warna
    cout << setw(13) << it->get_sleeveType() << " |";              // Tipe Sleeve
    cout << endl;

    i++;
}

cout << "---------------------------------------------------------------------------------------------------------------" << endl;

    return 0;
};