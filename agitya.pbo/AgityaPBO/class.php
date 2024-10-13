<?php

class Buah {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function get_name() {
        return $this->nama;
    }
}

// Membuat objek dari kelas Buah
$apel = new Buah();
$pisang = new Buah();

// Mengatur nama buah
$apel->set_name('Apel');
$pisang->set_name('Pisang');

// Menampilkan nama buah
echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
?>