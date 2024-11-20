  <section id="tambah_user" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MENU</h2>
          <p>Tambah Menu</p>
        </div>

        <form action="_bagian/add_menu.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <select name="id_jenis" id="id_jenis" class="form-control">
                <option value="1">Makanan</option>
                <option value="2">Minuman</option>
                <option value="3">Camilan</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="nama_masakan" class="form-control" id="nama_masakan" placeholder="Masukkan Nama Menu" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="status" class="form-control" id="status" placeholder="Masukkan 1 (Tersedia) dan 0(Tidak Tersedia)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
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