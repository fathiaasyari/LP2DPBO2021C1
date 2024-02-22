
#include <iostream>
#include <string>
#include "Product.cpp"

using namespace std;

class Clothing : public Product
{
    private:
        string size;
        string material;
        string gender;

    public:
        Clothing()
        {

        }

        Clothing(string size, string material, string gender)
        {
            this->size = size;
            this->material = material;
            this->gender = gender;

        }

        void set_size(string size)
        {
            this->size = size;
        }

        string get_size()
        {
            return this->size;
        }

        void set_material(string material)
        {
            this->material = material;
        }

        string get_material()
        {
            return this->material;
        }

        void set_gender(string gender)
        {
            this->gender = gender;
        }

        string get_gender()
        {
            return this->gender;
        }

        ~Clothing()
        {

        }
};