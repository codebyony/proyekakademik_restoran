<?php
    //session_start();
    //require "functionLogin.php";
    include "koneksi.php";
    
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $query = "SELECT * FROM  user WHERE username='$username' 
    and password='$password'";
    $result=mysqli_query($connect,$query);
    $cek =mysqli_num_rows($result);
    $hasil = mysqli_fetch_array($result);

    if($cek == 1 & $hasil['id_level'] == 5){ 
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['id_user'] = $hasil['id_user'];
        ?>
        <script language="JavaScript">
            alert('Anda Berhasil Login');
            document.location='./pelanggan.php?id='+<?php echo $hasil['id_user'];?>+'&edit=1';
        </script>
        <!--Anda berhasil Login
        <a href="#">Tabel</a> --><?php
    }else if($cek == 1 & $hasil['id_level'] == 1){ 
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['id_user'] = $hasil['id_user'];
        ?>
        <script language="JavaScript">
            alert('Anda Berhasil Login');
            document.location='./user_admin.php?id=0&edit=0';
        </script>
        <!--Anda berhasil Login
        <a href="#">Tabel</a> --><?php
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai');
            document.location='login.html';
        </script>
        <?php
    }
?>