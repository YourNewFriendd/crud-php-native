<?php 
$konek = mysqli_connect("localhost:3307","root","","test");

    function tampilSemua($tampil){
        global $konek;
        $tampilSemua = mysqli_query($konek,$tampil);
        $isiTampilSemua = [];
        while($isi = mysqli_fetch_object($tampilSemua)){
            $isiTampilSemua[] = $isi;
        }
        return $isiTampilSemua;
    }

    function tambahMahasiswa($data){
        global $konek;
        $nbi = htmlspecialchars($data["nbi"]);
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $jenisKelamin = htmlspecialchars($data["gender"]);
        $agama = htmlspecialchars($data["agama"]);
        $bahasa = htmlspecialchars(implode(",",($data["bahasa"])));
        
        $queryCek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM mahasiswa WHERE nbi='$nbi' or nama='$nama'"));
        if($queryCek > 0 ){
            echo "<script>
                    window.alert('NBI atau Nama yang anda masukan sudah ada')
                    window.location='dasboardAwal.php'
                </script>";
        }else{
            $queryTambahData = "INSERT INTO mahasiswa VALUES (null,'$nbi','$nama','$alamat','$jenisKelamin','$agama','$bahasa')";
            mysqli_query($konek,$queryTambahData);
            return mysqli_affected_rows($konek);
        }
    }

    function hapusData($id){
        global $konek;
        mysqli_query($konek,"DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($konek);
    }

    function editData($data){
        global $konek;
        $dataID = $data["id"];
        $nbi = htmlspecialchars($data["nbi"]);
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $jenisKelamin = htmlspecialchars($data["gender"]);
        $agama = htmlspecialchars($data["agama"]);
        $bahasa = htmlspecialchars(implode(",",($data["bahasa"])));

        $queryUpdate = "UPDATE mahasiswa SET nbi='$nbi', nama='$nama', alamat='$alamat', jenis_kelamin='$jenisKelamin', agama='$agama', bahasa='$bahasa'  WHERE id='$dataID'";

        mysqli_query($konek,$queryUpdate);

        return mysqli_affected_rows($konek);
    }

?>