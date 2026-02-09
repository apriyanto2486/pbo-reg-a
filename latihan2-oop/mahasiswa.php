<?php 
class Mahasiswa {
    // Properties
    public $nama;   
    public $nim;
    public $prodi;

    public function __construct($nim,$nama,$prodi){
       $this->nim= $nim;
       $this->nama = $nama;
       $this->prodi = $prodi;

    }
    public function getProfile(){
        return "[$this->nama]-$this->nim - $this->prodi";
    }
}
// Membuat objek dari kelas Mahasiswa

$mahasiswa = new Mahasiswa("T122001","Andi","Informatika");

// echo $mahasiswa->getProfile().'<br>';

foreach($mahasiswa as $key => $value){
    echo "$key : $value<br>";
}

?>


