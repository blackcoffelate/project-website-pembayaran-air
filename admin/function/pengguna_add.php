<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['nomor_sambungan'])){
    
    $nomor_sambungan = mysqli_real_escape_string($conn, $_POST['nomor_sambungan']);
    $nomor_rekening = mysqli_real_escape_string($conn, $_POST['nomor_rekening']);
    $nama_pengguna = mysqli_real_escape_string($conn, $_POST['nama_pengguna']);
    $alamat_pengguna = mysqli_real_escape_string($conn, $_POST['alamat_pengguna']);
    $golongan = mysqli_real_escape_string($conn, $_POST['golongan']);
    $jenis_penggunaan = mysqli_real_escape_string($conn, $_POST['jenis_penggunaan']);
    
    $sql = "INSERT INTO pengguna (nomor_sambungan, nomor_rekening, nama_pengguna, alamat_pengguna, golongan, jenis_penggunaan, create_at, update_at)
    VALUES ('$nomor_sambungan', '$nomor_rekening', '$nama_pengguna', '$alamat_pengguna', '$golongan', '$jenis_penggunaan', now(), now())";

    if (mysqli_query($conn, $sql)){            
        $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Yeayy selamat !</strong> data berhasil di masukan.
        </div>
        <script>setTimeout(function(){ location.href='./pengguna'; }, 1000);</script>
        ";            
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
}

?>
