<?php
abstract class Produk{
    protected $judul,
            $penulis,
            $penerbit,
            $harga;
    protected $diskon;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {   
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul harus string!");
        }
        $this->judul = $judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }   

    public function setPenulis($penulis){
        if(!is_string($penulis)){
            throw new Exception("Judul harus string!");
        }
        $this->penulis = $penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setPenerbit($penerbit){
        if(!is_string($penerbit)){
            throw new Exception("Judul harus string!");
        }
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}