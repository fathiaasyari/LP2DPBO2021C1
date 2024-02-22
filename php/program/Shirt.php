<?php

//IMPORT FILE
require('Clothing.php');

//KELAS SHIRT ADALAH CHILD DARI CLOTHING
class Shirt extends Clothing
{
    //PRIVATE ATRIBUT
    private $color = '';
    private $sleeveType = '';

    //KONSTRUKTOR
    public function __construct($id_product = '', $name = '', $brand = '', $price = '', $size = '', $material = '', $gender = '', $color = '', $sleeveType = '')
    {
        parent::__construct($id_product, $name, $brand, $price, $size, $material, $gender);
        $this->color = $color;
        $this->sleeveType = $sleeveType;
    }

    //GETTER DAN SETTER COLOR
    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }

    //GETTER DAN SETTER SLEEVE TYPE
    public function set_sleeveType($sleeveType)
    {
        $this->sleeveType = $sleeveType;
    }

    public function get_sleeveType()
    {
        return $this->sleeveType;
    }

}

?>
