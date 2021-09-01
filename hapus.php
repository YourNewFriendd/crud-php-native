<?php 
require 'fungsi.php';

$id = $_GET["id"];

if(hapusData($id) >0){
    echo 
                        "<script>
                                alert('Data Berhasil Dihapus!');
                                document.location.href = 'dasboardAwal.php';
                        </script>";
}else{
    echo 
        "<script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'dasboardAwal.php';
        </script>";
}

?>