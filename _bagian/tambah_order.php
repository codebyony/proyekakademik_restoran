  <section id="tambah_order" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ORDER</h2>
          <p>Tambah Order</p>
        </div>

        <form action="_bagian/add_order.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="no_meja" class="form-control" id="no_meja" placeholder="Masukkan No Meja" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="id_user" class="form-control" id="id_user" placeholder="Masukkan Id User" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" name="status_order" class="form-control" id="status_order" placeholder="Masukkan Status Order" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3" style="display: none;">
            <div class="loading">Loading</div>
            <div class="error-message" style="display: none;"></div>
            <div class="sent-message">Terkirim!</div>
          </div>
          <div class="text-center"><button type="submit">Tambah</button></div>
        </form>
      </div>
    </section>