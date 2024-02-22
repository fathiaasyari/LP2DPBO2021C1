<?php

//IMPORT FILE
require('Product.php');

//KELAS CLOTHING ADALAH CHILD DARI PRODUCT
class Clothing extends Product
{
    //PRIVATE ATRIBUT
    private $size = '';
    private $material = '';
    private $gender = '';

    //KONSTRUKTOR
    public function __construct($id_product = '', $name = '', $brand = '', $price = '', $size = '', $material = '', $gender = '')
    {
        parent::__construct($id_product, $name, $brand, $price);
        $this->size = $size;
        $this->material = $material;
        $this->gender = $gender;
    }

    //GETTER DAN SETTER SIZE
    public function set_size($size)
    {
        $this->size = $size;
    }

    public function get_size()
    {
        return $this->size;
    }

    //GETTER DAN SETTER MATERIAL
    public function set_material($material)
    {
        $this->material = $material;
    }

    public function get_material()
    {
        return $this->material;
    }

    //GETTER DAN SETTER GENDER
    public function set_gender($gender)
    {
        $this->gender = $gender;
    }

    public function get_gender()
    {
        return $this->gender;
    }

}

?>
