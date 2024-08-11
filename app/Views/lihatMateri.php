<div class="col-md-9 col-xl-10">
                <section id="features-comparison" class="container">
                    <div class="features-heading text-center mb-4">
                        
                    </div>
                    <div class="my-lg-4 d-lg-flex flex-wrap justify-content-start gap-3">
                        <?php
                        // Menampilkan detail materi berdasarkan ID yang dipilih
                        if (isset($_GET['id'])) {
                            $selectedId = $_GET['id'];
                            $selectedMateri = array_filter($materi, function($item) use ($selectedId) {
                                return $item['id'] == $selectedId;
                            });
                            if (!empty($selectedMateri)) {
                                $selectedMateri = array_values($selectedMateri)[0];
                                ?>
                                <div class="features-heading text-left mb-4">
                        
                                    <h2 class="fw-bolder display-5"> <?= $selectedMateri['judul_materi']; ?></h2>
                                    <p class="lead mb-5"><?= $selectedMateri['deskripsi_materi']; ?></p>
                                    </div>
                                    <?php
                            } else {
                                echo "<p>Materi tidak ditemukan.</p>";
                            }
                        } else {
                            echo "<p>Pilih materi dari sidebar untuk melihat detailnya.</p>";
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>