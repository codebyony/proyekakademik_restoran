  <section id="edit_user" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>USER</h2>
          <p>Edit Profile</p>
        </div>
        <?php
          include "koneksi.php";

          $id = $_GET['id'];
          $query = "SELECT*FROM user WHERE id_user='$id'";
          $result = mysqli_query($connect, $query);
        ?>
        <form action="_bagian/update_user.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <?php
            while($row=mysqli_fetch_array($result)){
          ?>
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <label>Username: </label>
              <input type="hidden" name="id" value="<?php echo $id;?>">
              <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['username'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Password: </label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['password'];?>">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <label>Nama: </label>
              <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="Masukkan Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo $row['nama_user'];?>">
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