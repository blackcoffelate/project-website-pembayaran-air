<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['nama_golongan'])){
    
    $nama_golongan = mysqli_real_escape_string($conn, $_POST['nama_golongan']);
    
    $sql = "INSERT INTO golongan (nama_golongan, create_at, update_at)
    VALUES ('$nama_golongan', now(), now())";

    if (mysqli_query($conn, $sql)){            
        $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Yeayy selamat !</strong> data berhasil di masukan.
        </div>
        <script>setTimeout(function(){ location.href='./golongan'; }, 1000);</script>
        ";            
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
}

?>
