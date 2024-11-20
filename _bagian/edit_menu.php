  <section id="tambah_user" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MENU</h2>
          <p>Edit Menu</p>
        </div>
        <?php
          include "koneksi.php";

          $id = $_GET['id'];
          $query = "SELECT*FROM masakan WHERE id_masakan='$id'";
          $result = mysqli_query($connect, $query);
        ?>
        <form action="_bagian/update_menu.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <?php
            while($row=mysqli_fetch_array($result)){
          ?>
          <div class="row">
            <input type="hidden" name="id_masakan" value="<?php echo $row['id_jenis'];?>">
            <div class="col-lg-4 col-md-6 form-group">
              <select name="id_jenis" id="id_jenis" class="form-control">
                <option value="1" <?php echo ($row['id_jenis'] == 1) ?  "selected" : "" ;?>>Makanan</option>
                <option value="2" <?php echo ($row['id_jenis'] == 2) ?  "selected" : "" ;?>>Minuman</option>
                <option value="3" <?php echo ($row['id_jenis'] == 3) ?  "selected" : "" ;?>>Camilan</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="nama_masakan" class="form-control" id="nama_masakan" placeholder="Masukkan Nama Menu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['nama_masakan'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['harga'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="status" class="form-control" id="status" placeholder="Masukkan 1 (Tersedia) dan 0(Tidak Tersedia)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['status'];?>">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3" style="display: none;">
            <div class="loading">Loading</div>
            <div class="error-message" style="display: none;"></div>
            <div class="sent-message">Terkirim!</div>
          </div>
          <div class="text-center"><button type="submit" onclick="redirect()">Simpan</button></div>
          <?php 
            }
          ?>
        </form>
      </div>
    </section>