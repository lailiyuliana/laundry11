<?php 
    if($_GET['id_member']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus Member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal Hapus Member');location.href='tampil_member.php';</script>";
        }
    }//href: javascript untuk membantu pindah page
?>