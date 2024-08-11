

    <!-- Navbar -->
   

    <section
      id="features-comparison"
      class="container d-lg-flex flex-column  justify-content-center "
    >
      <div class="features-heading text-center">
              <h2 class="fw-bolder display-5">Kursus Unggulan</h2>
              <p class="lead mb-5">
              Temukan kursus terbaik yang dirancang untuk meningkatkan keterampilan Anda dan memajukan karier Anda. 
  Pelajari teknik-teknik praktis dan strategi terkini untuk mencapai kesuksesan profesional.
              </p>
            </div>
      <div class=" my-lg-4 d-lg-flex flex-wrap justify-content-evenly gap-3 w-100 ">
      <?php foreach ($beranda as $b) : ?>
          <div class="col-lg-4 mb-5 ">
            <div class="card  shadow border-0">
              
              <div class="card-body p-4 ">
                <div class="badge bg-gradient rounded-pil mb-2">
                gratis
                </div>
                <a
                  class="text-decoration-none link-dark stretched-link"
                  href="<?= base_url('/course/materi/' . $b['id']); ?>"
                  ><h5 class="card-title mb-3">
                  <?= $b['judul']; ?>
                  </h5></a
                >
                <p class="card-text mb-0">
                <?= $b['deskripsi']; ?>
              </div>
              <div class="card-footer p-4 pt-0 bg-transparent border-top-0 w-100">
                <div class="d-flex align-items-end justify-content-between w-100">
                  <div class="d-flex align-items-center w-100">
                    
                    <div class="small w-100">
                      <div class="fw-bold"> <?= esc($b['materi_count']); ?> Materi
                        </div>
                      <div class="flex-row d-flex justify-content-between w-100">
                      <p class="text-muted">

                      <?= $b['tanggal']; ?></p>
                      <p class="text-muted"> <?= $b['durasi']; ?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
    </section>

 