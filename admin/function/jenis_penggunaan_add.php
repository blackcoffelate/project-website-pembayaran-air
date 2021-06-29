<?php

require_once "connection.php";

if ($conn->connect_error){
    die("Cannot connect" .$conn->connect_error);
}

if (isset($_POST['nama_jenis_penggunaan'])){
    
    $nama_jenis_penggunaan = mysqli_real_escape_string($conn, $_POST['nama_jenis_penggunaan']);
    
    $sql = "INSERT INTO jenis_penggunaan (nama_jenis_penggunaan, create_at, update_at)
    VALUES ('$nama_jenis_penggunaan', now(), now())";

    if (mysqli_query($conn, $sql)){            
        $check_data = "<div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
        <strong>Yeayy selamat !</strong> data berhasil di masukan.
        </div>
        <script>setTimeout(function(){ location.href='./jenis_penggunaan'; }, 1000);</script>
        ";            
    }else{
        echo "Error" .$sql.$conn->error;
    }

    // $conn->close();
}

?>
