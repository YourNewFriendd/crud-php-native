<?php 

require 'fungsi.php';

$id = $_GET["id"];

$data = mysqli_query($konek,"SELECT * FROM mahasiswa WHERE id = $id");
$dataArray = mysqli_fetch_array($data);
$dataBahasa = explode(',', $dataArray["bahasa"]);


if(isset($_POST["submit"])){

    if(editData($_POST) > 0){
            echo 
                    "<script>
                            alert('Data Berhasil Diubah!');
                            document.location.href = 'dasboardAwal.php';
                    </script>";
    }else{
            echo 
                    "<script>
                            alert('Data Gagal Diubah!');
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
    <title>DASHBOARD | Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah DATA MAHASISWA</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $dataArray['id']?>">
        <ul>
            <li>
                <label for="nbi">NBI : </label>
                <input type="number" id="nbi" name="nbi" required value="<?= $dataArray['nbi']?>">
            </li>
        </ul>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" required value="<?= $dataArray['nama']?>">
            </li>
        </ul>
        <ul>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" id="alamat" name="alamat" required value="<?= $dataArray['alamat']?>" >
            </li>
        </ul>
        <ul>
            <li>Jenis Kelamin :</li>
                <input type="radio" id="laki-laki" name="gender" value="Laki-Laki" 
                <?php if($dataArray['jenis_kelamin']=='Laki-Laki') echo 'checked'?>
                />
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="perempuan" name="gender" value="Perempuan" 
                <?php if($dataArray['jenis_kelamin']=='Perempuan') echo 'checked'?>
                />
                <label for="perempuan">Perempuan</label>
        </ul>
        <ul>
            <li>Pilih Agama :</li>
                <input type="radio" id="Islam" name="agama" value="Islam" 
                <?php if($dataArray['agama']=='Islam') echo 'checked'?>/>
                <label for="Islam">Islam</label><br>
                <input type="radio" id="Kristen" name="agama" value="Kristen" 
                <?php if($dataArray['agama']=='Kristen') echo 'checked'?>/>
                <label for="Kristen">Kristen</label>
        </ul>
        <ul>
            <li>Pilih Bahasa yang dikuasai :</li>
                <label for="">Pilihlah minimal 1 bahasa</label><br>
                <input type="checkbox" id="HTML" name="bahasa[]" value="HTML" 
                <?php if(in_array("HTML", $dataBahasa)) echo "checked";?>/>
                <label for="HTML">HTML</label><br>
                <input type="checkbox" id="CSS" name="bahasa[]" value="CSS" 
                <?php if(in_array("CSS", $dataBahasa)) echo "checked";?>/>
                <label for="CSS">CSS</label><br>
                <input type="checkbox" id="PHP" name="bahasa[]" value="PHP" 
                <?php if(in_array("PHP", $dataBahasa)) echo "checked";?>/>
                <label for="PHP">PHP</label><br>
                <input type="checkbox" id="JAVASCRIPT" name="bahasa[]" value="JAVASCRIPT" 
                <?php if(in_array("JAVASCRIPT", $dataBahasa)) echo "checked";?>/>
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