<?php 
class warga{
    var $nama;
    var $alamat;

    public function personAwal(){
        echo $nama_lengkap="Adi Suradi";
        echo "<br>";
        echo $alamat="Bogor";
    }

    public function person(){
        echo $nama_lengkap=$this->nama;
        echo "<br>";
        echo $alamat=$this->alamat;
    }

    public function setPerson(){
        $this->nama="Nama 1";
        echo "<br>";
        $this->alamat="Alamat 1";
    }

    public function person3($nama,$alamat){
        echo $nama_lengkap=$nama;
        echo "<br>";
        echo $alamat=$alamat;
    }
}
?>