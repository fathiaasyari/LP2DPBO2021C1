<?php

//KELAS PRODUCT
class Product
{
    //PRIVATE ATRIBUT
    private $id_product = '';
    private $name = '';
    private $brand = '';
    private $price = '';

    //KONSTRUKTUR
    public function __construct($id_product = '', $name = '', $brand = '', $price = '') {
        $this->id_product = $id_product;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    //GETTER DAN SETTER id_product
    public function set_id_product($id_product)
    {
        $this->id_product = $id_product;
    }

    public function get_id_product()
    {
        return $this->id_product;
    }

    //GETTER DAN SETTER name
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    //GETTER DAN SETTER brand
    public function set_brand($brand)
    {
        $this->brand = $brand;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    //GETTER DAN SETTER price
    public function set_price($price)
    {
        $this->price = $price;
    }

    public function get_price()
    {
        return $this->price;
    }

}

?>
