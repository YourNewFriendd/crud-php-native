<?php 
    require 'fungsi.php';

    $dataMahasiswa = tampilSemua("SELECT * FROM mahasiswa");
    $i =1;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD | Home</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>NBI</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Bahasa</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($dataMahasiswa as $mhs) :?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $mhs->nbi ?></td>
            <td><?= $mhs->nama ?></td>
            <td><?= $mhs->alamat ?></td>
            <td><?= $mhs->agama ?></td>
            <td><?= $mhs->jenis_kelamin ?></td>
            <td><?= $mhs->bahasa ?></td>
            <td><a href="edit.php?id=<?= $mhs->id?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs->id?>">Hapus</a></td>
        </tr>
        
        <?php $i++; endforeach;?> 
    </table>
</body>
</html>