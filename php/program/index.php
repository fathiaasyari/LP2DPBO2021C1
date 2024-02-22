<?php
//IMPORT FILE
require ('Shirt.php');

//LIST OF OJEK Shirt
$arrayshirt = array(); 

//OBJEK Shirt KE 1
$satu = new Shirt();

//ISI DATA
$satu->set_id_product('921');
$satu->set_name("Joana");
$satu->set_brand("Baila");
$satu->set_price('100000');
$satu->set_size("XL");
$satu->set_material("Jeans");
$satu->set_gender("Male");
$satu->set_color("Grey");
$satu->set_sleeveType("Pants");

//MASUKKAN KE ARRAY
array_push($arrayshirt, $satu);

//OBJEK Shirt KE 2
$dua = new Shirt();

//ISI DATA
$dua->set_id_product('813');
$dua->set_name("Tiwi");
$dua->set_brand('Laveila');
$dua->set_price('93000');
$dua->set_size("S");
$dua->set_material("Paris");
$dua->set_gender("Female");
$dua->set_color("Sage");
$dua->set_sleeveType("Hijab");

array_push($arrayshirt, $dua);

//OBJEK Shirt KE 3
$tiga = new Shirt();

//ISI DATA
$tiga->set_id_product('620');
$tiga->set_name("COOLES");
$tiga->set_brand('Puma');
$tiga->set_price('899999');
$tiga->set_size("L");
$tiga->set_material("Katun");
$tiga->set_gender("Unisex");
$tiga->set_color("Black");
$tiga->set_sleeveType("Jacket");

//MASUKKAN KE ARRAY
array_push($arrayshirt, $tiga);

//OUTPUT DALAM TABEL
echo "<h2><b><center>Data Shirt</center></b></h2>";

//HEADER TABEL
echo "<center><table border='1'>";
echo "<tr>
        <th> No </th>
        <th> Id </th>
        <th> Nama Product </th>
        <th> Merek </th>
        <th> Harga </th>
        <th> Ukuran </th>
        <th> Bahan </th>
        <th> Warna </th>
        <th> Gender </th>
        <th> Tipe Sleeve </th>
      </tr>";

//ISI TABEL
for ($i = 0; $i < count($arrayshirt); $i++) {
    echo "<tr><td>";
    echo $i + 1;
    echo "</td><td>";
    echo $arrayshirt[$i]->get_id_product();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_name();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_brand();
    echo "</td><td>";
    echo 'Rp' . number_format($arrayshirt[$i]->get_price(), 0, ',', '.');
    echo "</td><td>";
    echo $arrayshirt[$i]->get_size();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_material();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_color();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_gender();
    echo "</td><td>";
    echo $arrayshirt[$i]->get_sleeveType();
    echo "</td></tr>";
}

echo "</table></center>";
?>

