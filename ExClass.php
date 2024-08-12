<?php

Class Santri {
    protected $nama;
    protected $umur;
    protected $jurusan;

    public function __construct($nama,$umur,$jurusan){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jurusan = $jurusan;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getUmur(){
        return $this->umur;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
}

class PondokPesantren{
    protected $namaPondok;
    protected $lokasi;
    protected $santri = [];

    public function __construct($namaPondok, $lokasi) {
        $this->namaPondok = $namaPondok;
        $this->lokasi = $lokasi;
    }
    public function tambahSantri(Santri $santri) {
        $this->santri[] = $santri;
    }
    public function getNamaPondok(){
        return $this->namaPondok;
    }
    public function getLokasi(){
        return $this->lokasi;
    }
    public function showDaftarSantriPondok() {
        foreach ($this->santri as $value){
          echo "- Nama: " . $value->getNama() . "\t, Umur: " . $value->getUmur() . "\t, Jurusan: " . $value->getJurusan() . "\n";     
        }
    }
    public function showDataPondok(){
       echo("\t= ".$this->namaPondok." - ".$this->lokasi. " =\n");
    }
}



class addNewPondok extends PondokPesantren{
   public function addSantri(PondokPesantren $pondok) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jurusan = $_POST['jurusan'];

        $pondok->tambahSantri(new Santri($nama,$umur,$jurusan));
    }
    public function showData(PondokPesantren $pondok) {
        $pondok->showDataPondok();
        $pondok->showDaftarSantriPondok();
    }
}

$test = new addNewPondok('Pondok IT',"Yogyakarta");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test -> addSantri($test);
    $test -> showData($test);
}

?>

