#include <iostream>
#include <string>

using namespace std;

class Product
{
    private:
        int idProduct;
        string name;
        string brand;
        double price;

    public:
        Product()
        {

        }

        Product(int idProduct, string name, string brand, double price)
        {
            this->idProduct = idProduct;
            this->name = name;
            this->brand = brand;
            this->price = price;
        }

        void set_idProduct(int idProduct)
        {
            this->idProduct = idProduct;
        }

        int get_idProduct()
        {
            return this->idProduct;
        }

        void set_name(string name)
        {
            this->name = name;
        }

        string get_name()
        {
            return this->name;
        }

        void set_brand(string brand)
        {
            this->brand = brand;
        }

        string get_brand()
        {
            return this->brand;
        }

        void set_price(double price)
        {
            this->price = price;
        }

        double get_price()
        {
            return this->price;
        }
    
        ~Product()
        {

        }
};
