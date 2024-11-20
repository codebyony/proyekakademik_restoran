  <section id="edit_user" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Transaksi</h2>
          <p>Detail Transaksi</p>
        </div>
        <?php
          include "koneksi.php";

          $id = $_GET['id'];
          $query = "SELECT * FROM `order` WHERE id_order='$id'";
          $result = mysqli_query($connect, $query);
        ?>
        <form action="_bagian/update_order.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <?php
            while($row=mysqli_fetch_array($result)){
          ?>
          <div class="row">
            <input type="hidden" name="id_order" value="<?php echo $row['id_order'];?>">
            <div class="col-lg-4 col-md-6 form-group">
              <label>No Meja:</label>
              <input type="number" name="no_meja" class="form-control" id="no_meja" placeholder="Masukkan No Meja" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['no_meja'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Tanggal:</label>
              <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['tanggal'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Id User:</label>
              <input type="number" name="id_user" class="form-control" id="id_user" placeholder="Masukkan Id User" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['id_user'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Keterangan:</label>
              <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['keterangan'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Status:</label>
              <input type="number" name="status_order" class="form-control" id="status_order" placeholder="Masukkan Status Order" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['status_order'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Total Harga:</label>
              <input type="number" name="status_order" class="form-control" id="status_order" placeholder="Masukkan Status Order" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['status_order'];?>">
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