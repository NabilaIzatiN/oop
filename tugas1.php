<?php
class cake {
    public $nama, $bentuk, $penyimpanan, $ukuran, $topping, $harga;
    public function __construct(  $nama = "nama", $bentuk = "bentuk", $penyimpanan = "penyimpanan", $ukuran = "ukuran", $topping = "topping",  $harga = 0) {
        $this-> nama = $nama;
        $this-> bentuk = $bentuk;
        $this-> pennyimpanan = $penyimpanan;
        $this -> ukuran = $ukuran;
        $this -> topping = $topping;
        $this -> harga = $harga;
    }

    public function getlabel(){
        return "$this->bentuk, $this->penyimpanan";
    }
    public function getinfocake(){
        $str = "{$this->nama}, {$this->getlabel()}, (Rp.{$this->harga})";
        return $str;
    }
    
}

class parfume {
    public $jenis, $nama, $merk, $isi, $harga;
    public function __construct( $jenis = "jenis", $nama = "nama", $merk = "merk", $isi = "isi",  $harga = 0) {

        $this-> jenis = $jenis;
        $this-> nama = $nama;
        $this-> merk = $merk;
        $this-> isi = $isi;
        $this -> harga = $harga;
    }
    public function getlabel(){
        return "$this->nama, $this->merk, $this->isi";
    }

    public function getinfoparfume(){
        $str="$this->jenis}, {$this->getlabel()}, Rp.{$this->harga}";
        return $str;
    }
}

class mousecake extends cake{
public function getinfocake(){
    $str = "mousecake= {$this->nama}, {$this->getlabel()}, {$this->ukuran}, {$this->topping}, Rp. {$this->harga}";
    return $str;
}
}

class castellacake extends cake{
    public function getinfocake(){
        $str = "castellacake= {$this->nama}, {$this->getlabel()}, {$this->ukuran}, {$this->topping}, Rp. {$this->harga}";
        return $str;
    }
}

class unisex extends parfume{
    public function getinfoparfume(){
        $str="unisex={$this->jenis}, {$this->getlabel()}, Rp. {$this->harga}";
    return $str;
    }
}

class woman extends parfume{
    public function getinfoparfume(){
        $str="woman= {$this->jenis}, {$this->getlabel()}, Rp. {$this->harga}";
    return $str;
    }
}

class man extends parfume{
    public function getinfoparfume(){
        $str="man= {$this->jenis}, {$this->getlabel()}, Rp. {$this->harga}";
    return $str;
    }
}

class cetakinfocake{
    public function cetak(cake $cake){
        $str = "{$cake->nama},{$cake->getlabel()}, Rp. {$cake->harga}";
        return $str;
    }
}

class cetakinfoparfume{
    public function cetak (parfume $parfume){
        $str="{$parfume->jenis}, {$parfume->getlabel()}, Rp. {$parfume->harga}";
        return $str;
    }
}

$cake1 = new mousecake("spring day","bulat","beku","16 cm",160000);
$cake2 = new mousecake("valentine","love","beku","16 cm",240000);
$cake3 = new castellacake("pandan","kotak","fresh from oven","25 X 25 cm",130000);
$cake4 = new castellacake("cheese","kotak","fresh from oven","25 X 25 cm",175000);

$parfume1 = new unisex("Unisex","Wood Sage","Jo Malone","30 ml",1315000);
$parfume2 = new unisex("Unisex","Santal 33","Le Labo","100 ml",3500000);
$parfume3 = new woman("Woman","Bloom","Gucci","100 ml",2450000);
$parfume4 = new woman("Woman","No 5","Chanel","100 ml",3498000);
$parfume5 = new man("Men","Sauvage","Dior","100 ml",2748000);
$parfume6 = new man("Men","Blu Mediterraneo Ginepro","Acqua Di Parma","100 ml",3149000);

echo $cake1->getinfocake();
echo "<br>";
echo $cake2->getinfocake();
echo "<br>";
echo $cake3->getinfocake();
echo "<br>";
echo $cake4->getinfocake();
echo "<hr>";
echo $parfume1->getinfoparfume();
echo "<br>";
echo $parfume2->getinfoparfume();
echo "<br>";
echo $parfume3->getinfoparfume();
echo "<br>";
echo $parfume4->getinfoparfume();
echo "<br>";
echo $parfume5->getinfoparfume();
echo "<br>";
echo $parfume6->getinfoparfume();
echo "<hr>";
?>