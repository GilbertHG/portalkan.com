<?php 
class cetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK";
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoLengkap()}<br>";
        }
        return $str;
    }

}