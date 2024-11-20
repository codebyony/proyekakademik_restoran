  <section id="order" class="why-us">
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
                <th>Id Order</th>
                <th>No Meja</th>
                <th>Tanggal</th>
                <th>Id User</th>
                <th>Keterangan</th>
                <th>Status Order</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include "koneksi.php";

              $query="SELECT * FROM `order`";
              $result = mysqli_query($connect, $query);

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><?php echo $row["id_order"] ?></td>
              <td><?php echo $row["no_meja"] ?></td>
              <td><?php echo $row["tanggal"] ?></td>
              <td><?php echo $row["id_user"] ?></td>
              <td><?php echo $row["keterangan"] ?></td>
              <td><?php echo $row["status_order"] ?></td>
              <td>
                <button type="button" class="btn btn-success" onclick="location.href='./order_admin.php?id=<?php echo $row['id_order'];?>&edit=1'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="location.href='./_bagian/delete_order.php?id=<?php echo $row['id_order'];?>'">Hapus</button>
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
