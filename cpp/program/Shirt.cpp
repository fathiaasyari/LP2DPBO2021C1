
#include <iostream>
#include <string>
#include "Clothing.cpp"

using namespace std;

class Shirt : public Clothing
{
    private: 
        string color;
        string sleeveType;
     
    public:
    
        Shirt()
        {

        }

        Shirt(string color, string sleeveType)
        {
            this->color = color;
            this->sleeveType = sleeveType;
        }

        void set_color(string color)
        {
            this->color = color;
        }

        string get_color()
        {
            return this->color;
        }

        void set_sleeveType(string sleeveType)
        {
            this->sleeveType = sleeveType;
        }

        string get_sleeveType()
        {
            return this->sleeveType;
        }


        ~Shirt()
        {

        }
};