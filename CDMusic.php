<?php
require_once('product.php');

class CDMusic extends Product
{
    private $artist;
    private $genre;

    public function __construct($name, $price, $discount, $artist, $genre)
    {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getPrice()
    {
        return $this->price - ($this->price * 0.10); // Menambahkan 10% pada harga CD
    }

    public function getDiscount()
    {
        return $this->discount = 0.05 ; // Menambahkan 5% pada diskon CD
    }

    public function FinalPrice()
    {
        $finalprice = $this->getPrice() - ($this->getPrice() * $this->getDiscount());
        return $finalprice;
    }
}
?>