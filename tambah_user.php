<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        nama  :
        <input type="text" name="nama" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        alamat : 
        <input type="alamat" name="alamat" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        kota : 
        <input type="kota" name="kota" value="" class="form-control">
        provinsi : 
        <input type="provinsi" name="provinsi" value="" class="form-control">
        Role :
        <select name="role" class="form-control">
            <option></option>
            <option value="admin">admin</option>
            <option value="kasir">kasir</option>
        <input type="submit" name="simpan" value="Tambah paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>