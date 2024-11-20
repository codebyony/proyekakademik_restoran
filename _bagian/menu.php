  <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Cek Menu Kami </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Makanan</li>
              <li data-filter=".filter-salads">Minuman</li>
              <li data-filter=".filter-specialty">Camilan</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <?php
              include "koneksi.php";

              $query="SELECT * FROM masakan";
              $result = mysqli_query($connect, $query);

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                  if($row["id_jenis"] == 1){
                    $filter = "filter-starters";
                  }else if($row["id_jenis"] == 2){
                    $filter = "filter-salads";
                  }else{
                    $filter = "filter-specialty";
                  }
            ?>
          <div class="col-lg-6 menu-item <?php echo $filter; ?>">
            <div class="menu-content">
              <a href="#"><?php echo $row["nama_masakan"] ?></a><span><?php echo $row["harga"] ?></span>
            </div>
            <div class="menu-ingredients">
              <?php echo ($row['status'] == 1) ?  "Tersedia" : "Tidak Tersedia" ;?>
            </div>
          </div>
          <?php
                }
              }
              else{
                echo "0 result";
              }
            ?>
        </div>

      </div>
    </section>