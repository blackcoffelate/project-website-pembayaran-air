<?php

require_once "connection.php";

if (isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    $id_users = $row['id_users'];
    $nama_lengkap = $row['nama_lengkap'];
    $username = $row['username'];
    $password = $row['password'];
    $alamat = $row['alamat'];
    $nomor_telp = $row['nomor_telp'];
    $role = $row['role'];
    $created = $row['create_at'];
    $updated = $row['update_at'];

    if ($username == $username && $password == $password){

        $_SESSION['id_users'] = $id_users;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['nomor_telp'] = $nomor_telp;
        $_SESSION['role'] = $role;
        $_SESSION['created_at'] = $created;
        $_SESSION['update_at'] = $updated;
    
        if ($_SESSION['role'] == '0'){ ?>

<script>
setTimeout(function() {
    location.href = "./admin";
}, 1000);
</script>

<?php }
    else if ($_SESSION['role'] == '1'){ 
?>

<script>
setTimeout(function() {
    location.href = "./user";
}, 1000);
</script>

<?php 
    }else{
        header('location: ./');
    }
}
}

?>
