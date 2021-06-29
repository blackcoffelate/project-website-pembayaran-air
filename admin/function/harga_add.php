<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['golongan'])){
    
    $golongan = mysqli_real_escape_string($conn, $_POST['golongan']);
    $jenis_penggunaan = mysqli_real_escape_string($conn, $_POST['jenis_penggunaan']);
    $tarif020 = mysqli_real_escape_string($conn, $_POST['tarif0-20']);
    $tarif2030 = mysqli_real_escape_string($conn, $_POST['tarif20-30']);
    $tariflebih30 = mysqli_real_escape_string($conn, $_POST['tariflebih30']);
    
    $sql = "INSERT INTO harga (golongan, jenis_penggunaan, tarif020, tarif2030, tariflebih30, create_at, update_at)
    VALUES ('$golongan', '$jenis_penggunaan', '$tarif020', '$tarif2030', '$tariflebih30', now(), now())";

    if (mysqli_query($conn, $sql)){            
        $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Yeayy selamat !</strong> data berhasil di masukan.
        </div>
        <script>setTimeout(function(){ location.href='./harga'; }, 1000);</script>
        ";            
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
}

?>
