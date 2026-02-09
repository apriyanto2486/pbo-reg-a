<?php 
class Mahasiswa {
    // Properties
    public $nama;   
    public $nim;
    public $prodi;

    //method 1
    public function seyHello(){
        return "Hello, nama saya " . $this->nama . ", NIM " . $this->nim . ", dari prodi " . $this->prodi . ".";
    }
    //menthod 2
    public function getProfile(){
        return "Nama :". $this->nama . 
        "<br>NIM : " . $this->nim . 
        "<br>Prodi : " . $this->prodi;
    }
}
// Membuat objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa();

$mahasiswa = [
    new Mahasiswa[
        'nama' => 'Budi',
        'nim' => '123456789',
        'prodi' => 'Informatika'
    ],
    new Mahasiswa[
        'nama' => 'Budi',
        'nim' => '123456789',
        'prodi' => 'Informatika'
    ],
    new Mahasiswa[
        'nama' => 'Budi',
        'nim' => '123456789',
        'prodi' => 'Informatika'
    ],
    new Mahasiswa[
        'nama' => 'Budi',
        'nim' => '123456789',
        'prodi' => 'Informatika'
    ],
]

$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "123456789";     
$mahasiswa1->prodi = "Informatika";

// Membuat objek dari kelas Mahasiswa
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Andi";
$mahasiswa2->nim = "1234567312";     
$mahasiswa2->prodi = "Sistem Informasi";

// cetak hasil
echo $mahasiswa1->seyHello() ."<br>";
echo $mahasiswa1->getProfile();

echo $mahasiswa2->seyHello() ."<br>";
echo $mahasiswa2->getProfile();
?>