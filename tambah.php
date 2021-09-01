<?php 

require 'fungsi.php';
if(isset($_POST["submit"])){

    if(tambahMahasiswa($_POST) > 0){
            echo 
                    "<script>
                            alert('Data Berhasil Ditambahkan!');
                            document.location.href = 'dasboardAwal.php';
                    </script>";
    }else{
            echo 
                    "<script>
                            alert('Data Gagal Ditambahkan!');
                            document.location.href = 'dasboardAwal.php';
                    </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD | Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>TAMBAH DATA MAHASISWA</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nbi">NBI : </label>
                <input type="number" id="nbi" name="nbi" required>
            </li>
        </ul>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" required>
            </li>
        </ul>
        <ul>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" id="alamat" name="alamat" required>
            </li>
        </ul>
        <ul>
            <li>Jenis Kelamin :</li>
                <input type="radio" id="laki-laki" name="gender" value="Laki-Laki" >
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="perempuan" name="gender" value="Perempuan" >
                <label for="perempuan">Perempuan</label>
        </ul>
        <ul>
            <li>Pilih Agama :</li>
                <input type="radio" id="Islam" name="agama" value="Islam" >
                <label for="Islam">Islam</label><br>
                <input type="radio" id="Kristen" name="agama" value="Kristen" >
                <label for="Kristen">Kristen</label>
        </ul>
        <ul>
            <li>Pilih Bahasa yang dikuasai :</li>
                <label for="">Pilihlah minimal 1 bahasa</label><br>
                <input type="checkbox" id="HTML" name="bahasa[]" value="HTML" >
                <label for="HTML">HTML</label><br>
                <input type="checkbox" id="CSS" name="bahasa[]" value="CSS" >
                <label for="CSS">CSS</label><br>
                <input type="checkbox" id="PHP" name="bahasa[]" value="PHP" >
                <label for="PHP">PHP</label><br>
                <input type="checkbox" id="JAVASCRIPT" name="bahasa[]" value="JAVASCRIPT" >
                <label for="JAVASCRIPT">JAVASCRIPT</label>
        </ul>
        <ul>
            <li>
                <button type="submit" name="submit">SIMPAN!</button>
            </li>
        </ul>
        
    </form>
</body>
</html>