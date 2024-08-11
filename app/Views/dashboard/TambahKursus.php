<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kursus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/tambahCourse" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
            <?php
        // Mendapatkan tanggal saat ini
                $tanggal_sekarang = date('Y-m-d'); // Format YYYY-MM-DD
            ?>
            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" readonly value="<?= $tanggal_sekarang; ?>">
        </div>
        <div class="mb-3">
           <label for="Judul" class="form-label">Judul</label>
           <input type="text" class="form-control" id="judul" name="judul">
       </div>
       <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp" rows="3"></textarea>
        </div>

           <div class="mb-3">
               <label for="durasi" class="form-label">Durasi</label>
               <input type="text" class="form-control" id="durasi" name="durasi">
            </div>   
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>    
        </div>    
    </form>
</div>