<?php

// class library{
//     protected $nama;
//     protected $alamat;
//     protected $books = [];

//     public function __construct($nama,$alamat)
//     {
//         $this->nama = $nama;
//         $this->alamat = $alamat;
//     }

//     public function getNama(){
//         return $this->nama;
//     }
//     public function getAlamat(){
//         return $this->alamat;
//     }
//     public function addBook(Book $paramBook){
//         $this->books[] = $paramBook;
//     }
//     public function showDataLib(){
//        echo ($this->nama."\t".$this->alamat."\n");
//     }
//     public function showDataBooks(){
//         foreach ($this->books as $value){
//             echo $value->getBuku() . $value->getPenerbit().$value->getPenulis()."\n";
//         }
//     }
// }

// class Book{
//     protected $judulBuku;
//     protected $penerbit;
//     protected $penulis;

//     public function __construct($judulBuku,$penerbit,$penulis)
//     {
//         $this->judulBuku = $judulBuku;
//         $this->penerbit=$penerbit;
//         $this->penulis=$penulis;
//     }

//     public function getBuku(){
//         return $this->judulBuku;
        
//     }
//     public function getPenerbit(){
//         return $this->penerbit;
//     }
//     public function getPenulis(){
//         return $this->penulis;
//     }
// }

// $Perpustakaan1 = new library("Nama perpus1","alamat Perspus1");
// $Perpustakaan1->addBook(new Book("Judul buku 1","penerbit Buku1","Penulis buku 1"));
// $Perpustakaan1->addBook(new Book("Judul buku 1","penerbit Buku1","Penulis buku 1"));
// $Perpustakaan1->showDataLib();
// $Perpustakaan1->showDataBooks();

class perpus{
    protected $nama;
    protected $alamat;
    protected $bukuBuku = [];

    public function __construct($nama,$alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getPerpus(){
        return $this->nama;
    }
    public function getAlamat(){
        return $this->alamat;
    }
    public function addBook(buku $paramBuku){
        $this->bukuBuku[] = $paramBuku;
        
    }
    public function ShowDataPerpus(){
        echo($this->nama." ".$this->alamat."\n");
    }
    public function ShowDataBuku(){
        foreach ($this->bukuBuku as $value){
            echo($value->getBuku()." ".$value->getPenulis()." ".$value->getPenerbit()."\n");
        }
    }
}

class buku{
    protected $judulBuku;
    protected $penulis;
    protected $penerbit;

    public function __construct($judulBuku,$penulis,$penerbit)
    {
        $this->judulBuku = $judulBuku;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }
    public function getBuku(){
        return $this->judulBuku;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
}

$Perpustakan1 = new perpus("PERPUSTAKAN 1","SLEMAN");
$Perpustakan1->ShowDataPerpus();
$Perpustakan1->addBook(new buku("Harry Potter","Bambang","Gramedia"));
$Perpustakan1->showDataBuku();







