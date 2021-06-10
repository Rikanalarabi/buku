<?php 
class Buku {
    public  $judul,
            $pengarang,
            $tahun_terbit,
            $penerbit;

    public function __construct($judul = "judul", $pengarang = "pengarang", $tahun_terbit = "tahun terbit", $penerbit ="penerbit")
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun_terbit = $tahun_terbit;
    }
    public function getInfo(){
        return "{$this->judul}, Pengarang : {$this->pengarang} dan {$this->penerbit}";
    }
    
    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){

    }
}

class Komik extends Buku {
    public $kategori;
    public function __construct($judul = "judul", $pengarang = "pengarang", $tahun_terbit = "tahun terbit", $penerbit ="penerbit", $kategori = "kategori")
    {
        parent::__construct($judul, $pengarang, $tahun_terbit, $penerbit);
        $this->kategori = $kategori;
    }
    public function getInfo(){
        $str = "Komik : " . parent::getInfo() ." Tahun Terbit {$this->tahun_terbit}";
        return $str;
    }
}
class Novel extends Buku {
    public $kategori;
    public function __construct($judul = "judul", $pengarang = "pengarang", $tahun_terbit = "tahun terbit", $penerbit ="penerbit", $kategori = "kategori")
    {
        parent::__construct($judul, $pengarang, $tahun_terbit, $penerbit);
        $this->kategori = $kategori;
    }
    public function getInfo(){
        $str = "Novel : " . parent::getInfo() ." Tahun Terbit {$this->tahun_terbit}";
        return $str;
    }
}

$buku1 = new Komik("Naruto", "masashi kisimoto", 2001, "shonen jump", "komik");
$buku2 = new Novel("Ayat - Ayat Cinta", "Habiburrahman El Shirazy", 2004, " Republika, Pesantren Basmala Indonesia", "Novel");

echo $buku1->getInfo();
echo "<br>";
echo $buku2->getInfo();
