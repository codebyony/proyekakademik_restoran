  <section id="user" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p> Daftar User </p>
        </div>
        <!-- <div class="row">
          <div class="col-md-2 col-sm-2">
            <a href="#btn_tambah_user" class="book-a-table-btn d-none d-lg-flex">Tambah Data</a>
          </div>
        </div> -->
        <div class="">
          <br>
          <table class="table table-striped table-light table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Id User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama User</th>
                <th>Id Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include "koneksi.php";

              $query="SELECT * FROM user";
              $result = mysqli_query($connect, $query);

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><?php echo $row["id_user"] ?></td>
              <td><?php echo $row["username"] ?></td>
              <td><?php echo $row["password"] ?></td>
              <td><?php echo $row["nama_user"] ?></td>
              <td><?php echo $row["id_level"] ?></td>
              <td>
                <button type="button" class="btn btn-success" onclick="location.href='./user_admin.php?id=<?php echo $row['id_user'];?>&edit=1'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="location.href='./_bagian/delete_user.php?id=<?php echo $row['id_user'];?>'">Hapus</button>
              </td>
            </tr>
            <?php
                }
              }
              else{
                echo "0 result";
              }
            ?>
          </table>
      </div>
    </section>
