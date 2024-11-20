  <section id="tambah_user" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>USER</h2>
          <p>Tambah User</p>
        </div>

        <form action="_bagian/add_user.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="Masukkan Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3" style="display: none;">
            <div class="loading">Loading</div>
            <div class="error-message" style="display: none;"></div>
            <div class="sent-message">Terkirim!</div>
          </div>
          <div class="text-center"><button type="submit" onclick="redirect()">Tambah</button></div>
        </form>
      </div>
    </section>