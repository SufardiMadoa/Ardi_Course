<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kursus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/sufardiWeb/tambahMateri" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="course_id" value="<?= $course_id; ?>">
        <div class="mb-3">
                <label for="tanggal" class="form-label text-black">Tanggal</label>
            <?php
        // Mendapatkan tanggal saat ini
                $tanggal_sekarang = date('Y-m-d'); // Format YYYY-MM-DD
            ?>
            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" readonly value="<?= $tanggal_sekarang; ?>">
        </div>
        <div class="mb-3">
            <label for="Judul" class="form-label text-black">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label text-black">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" aria-describedby="emailHelp"></textarea>
        </div>
           <div class="mb-3">
               <label for="link" class="form-label text-black">Link</label>
               <input type="text" class="form-control" id="link" name="link">
            </div>   
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>    
        </div>    
    </form>
</div>