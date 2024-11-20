<?php
  include "koneksi.php";

  $id_user=$_GET['id_user']
  $username=$_GET['username'];
  $password=$_GET['password'];
  $nama_user=$_GET['nama_user'];
  $id_level=$_GET['id_level'];

  $sql= "INSERT INTO user(id_user, username, password, nama_user, id_level)
          VALUE ('$id_user','$username' , '$password', '$nama_user', '$id_level')";

  ?>
      <a href="login.html">Login</a>
  <?php
      mysqli_close($connect);
  ?>
