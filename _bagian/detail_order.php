  <section id="menu" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p> Daftar Menu </p>
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
                <th>Id Masakan</th>
                <th>Id Jenis</th>
                <th>Nama Masakan</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include "koneksi.php";

              $query="SELECT * FROM masakan";
              $result = mysqli_query($connect, $query);

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><?php echo $row["id_masakan"] ?></td>
              <td><?php echo $row["id_jenis"] ?></td>
              <td><?php echo $row["nama_masakan"] ?></td>
              <td><?php echo $row["harga"] ?></td>
              <td><?php echo $row["status"] ?></td>
              <td>
                <button type="button" class="btn btn-success" onclick="location.href='./transaksi_order.php?id=<?php echo $row['id_masakan'];?>&id_user=$id'">Beli</button>
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
