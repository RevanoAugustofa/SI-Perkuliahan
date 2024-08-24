<?php
session_start(); //memulai session

class database{
    public $host ="localhost";
    public $username ="root";
    public $password ="";
    public $database ="db_perkuliahan";
    var $koneksi;

    function __construct(){
        $this->koneksi= mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
    
    function tampil_data_kls(){
        $query = "SELECT kelas.id_kls, kelas.nama_kls, kelas.thn_akademik, prodi.nama_prodi FROM kelas JOIN prodi ON kelas.id_prodi = prodi.id_prodi";
		$data = mysqli_query($this->koneksi, $query);
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
    }

    function tampil_data_mhs(){
        $query= mysqli_query($this->koneksi,' SELECT * FROM mahasiswa');
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }return $hasil;
    }

    function tampil_data_prodi(){
        $query= mysqli_query($this->koneksi,' SELECT * FROM prodi');
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }return $hasil;
    }

    function tampil_data_matakuliah(){
        $query= mysqli_query($this->koneksi,' SELECT * FROM matkul');
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }return $hasil;
    }

    function tampil_data_dosen(){
        $query= mysqli_query($this->koneksi,' SELECT * FROM dosen');
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }return $hasil;
    }

    function getalldata($database){
        $select=mysqli_query($this->koneksi,  "SELECT * FROM $database");
        $data= mysqli_num_rows($select);
        return $data;
    }


    // <--------------------------MAHASISWA------------------------------> 

    //method input mahasiswa
    function input_mhs($npm,$namamhs,$alamatmhs){	
        mysqli_query($this->koneksi, "INSERT INTO mahasiswa ( npm , nama_mhs, alamat_mhs) VALUES ('$npm','$namamhs','$alamatmhs')" );
    }

    //method hapus mahasiswa
    function hapus_mhs($id){
        mysqli_query($this->koneksi,"DELETE FROM mahasiswa WHERE id_mhs = '$id'");
    }

    //-----EDIT DAN UPDATE MAHASISWA-----//
    // method edit mahsiswa
    function edit_mhs($id){
        $query= mysqli_query($this->koneksi," SELECT * FROM mahasiswa WHERE id_mhs= '$id'");
        while($row = mysqli_fetch_array($query)){
            $hasil[]=$row;
        }return $hasil;
    }

    //method update mahasiswa
    function update_mhs($id,$npm,$namamhs,$alamatmhs){
       mysqli_query($this->koneksi,"UPDATE mahasiswa SET npm = '$npm', nama_mhs = '$namamhs', alamat_mhs='$alamatmhs' WHERE id_mhs= '$id'");
    }

    //<------------------------------PRODI-----------------------------> 

    // method input prodi 
    function input_prodi($namaprodi){
        mysqli_query($this->koneksi,"INSERT INTO prodi ( nama_prodi ) VALUES ('$namaprodi')" );
    }


    //method hapus prodi
    function hapus_prodi($id_prodi){
        mysqli_query($this->koneksi, "DELETE FROM prodi WHERE id_prodi = '$id_prodi'");
    }


    
    //-----EDIT DAN UPDATE PRODI-----//
    //method edit prodi
    function edit_prodi($id_prodi){ 
        $query = mysqli_query($this->koneksi, "SELECT * FROM prodi WHERE id_prodi = '$id_prodi'");
        while($row= mysqli_fetch_array($query)){
            $hasil[]=$row;
        } 
        return $hasil;
    }

    //method update prodi
    function update_prodi($id_prodi, $namaprodi){
       mysqli_query($this->koneksi,"UPDATE prodi SET nama_prodi = '$namaprodi' WHERE id_prodi= '$id_prodi'");
    }

   // <------------------------------KELAS---------------------------> 
   
    // method input kelas 
    function input_kelas($namakelas, $tahunakademik, $idprodi){
        mysqli_query($this->koneksi,"INSERT INTO kelas ( nama_kls, thn_akademik, id_prodi ) VALUES ('$namakelas','$tahunakademik', '$idprodi')");
    }


    //method hapus kelas
    function hapus_kelas($id_kelas){
        mysqli_query($this->koneksi, "DELETE FROM kelas WHERE id_kls = '$id_kelas'" );
    }

    
    //-----EDIT DAN UPDATE KELAS-----//
    //method edit kelas
    function edit_kelas($id_kelas){ 
        $query = mysqli_query($this->koneksi, "SELECT * FROM kelas WHERE id_kls = '$id_kelas'");
        while($row= mysqli_fetch_array($query)){
            $hasil[]=$row;
        } 
        return $hasil;
    }

    //method update kelas
    function update_kelas($id_kelas, $namakelas, $tahunakademik, $idprodi){
        mysqli_query($this->koneksi,"UPDATE kelas SET nama_kls = '$namakelas' , thn_akademik='$tahunakademik', id_prodi='$idprodi' WHERE id_kls= '$id_kelas'");
    }

    
    //<--------------------------DOSEN---------------------------->

    // method input dosen
    function input_dosen($nidn ,$nip, $nama, $alamat){
    mysqli_query($this->koneksi,"INSERT INTO dosen ( nidn, nip, nama_dsn, alamat_dsn) VALUES ('$nidn','$nip', '$nama','$alamat')");
    }

    //method hapus dosen
    function hapus_dosen($id_dosen){
        mysqli_query($this->koneksi, "DELETE FROM dosen WHERE id_dosen = '$id_dosen'" );
    }

    //-----EDIT DAN UPDATE DOSEN-----//
    //method edit dosen
    function edit_dosen($id_dosen){ 
        $query = mysqli_query($this->koneksi, "SELECT * FROM dosen WHERE id_dosen = '$id_dosen'");
        while($row= mysqli_fetch_array($query)){
            $hasil[]=$row;
        } 
        return $hasil;
    }

    //method update dosen
    function update_dosen($id_dosen,$nidn ,$nip, $nama, $alamat){
        mysqli_query($this->koneksi,"UPDATE dosen SET nidn='$nidn', nip='$nip', nama_dsn='$nama',alamat_dsn='$alamat' WHERE id_dosen= '$id_dosen'");
    }

    
    //<-------------------------MATKUL------------------------->

    // method input matkul
    function input_matkul($kode, $nama, $sks){
    mysqli_query($this->koneksi,"INSERT INTO matkul ( kode_mk, nama_mk, sks) VALUES ('$kode','$nama', '$sks')");
    }

    //method hapus matkul
    function hapus_matkul($id_mk){
        mysqli_query($this->koneksi, "DELETE FROM matkul WHERE id_mk = '$id_mk'" );
    }

    //-----EDIT DAN UPDATE MATKUL----//
    //method edit matkul
    function edit_matkul($id_mk){ 
        $query = mysqli_query($this->koneksi, "SELECT * FROM matkul WHERE id_mk = '$id_mk'");
        while($row= mysqli_fetch_array($query)){
            $hasil[]=$row;
        } 
        return $hasil;
    }

    //method update matkul
    function update_matkul($id_mk,$kode , $nama, $sks){
        mysqli_query($this->koneksi,"UPDATE matkul SET kode_mk='$kode', nama_mk='$nama', sks='$sks' WHERE id_mk= '$id_mk'");
    }

}



/////////--------------------- CLASS LOGIN ---------------------------/////////

class login extends database{ //membuat class baru dengan extend class database untuk memanggil $koneksi dan construc
    public $id; //var baru 
    public function login($useremail, $password){
        $result = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username= '$useremail' OR email='$useremail'");
        $row= mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row['password']){
                $this->id = $row['id'];
                return 1;
                //login berhasil
            }else{
                return 10;
                //password salah
            }

        }else{
            return 100;
            //tidak terdaftar
        }
    }

    public function idUser(){
        return $this->id;
    }
}