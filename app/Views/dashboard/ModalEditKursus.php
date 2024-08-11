<?php foreach ($event as $e) : ?>
<div class="modal fade" id="editModal<?= $e['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $e['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel<?= $e['id']; ?>">Edit Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/sufardiWeb/editCourse/<?= $e['id']; ?>" method="post">
          <?= csrf_field(); ?>
          <div class="mb-3">
            <label for="tanggal" class="form-label text-black">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $e['tanggal']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label text-black">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $e['deskripsi']; ?></textarea>
        </div>
          <div class="mb-3">
            <label for="judul" class="form-label text-black">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $e['judul']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="durasi" class="form-label text-black">Durasi</label>
            <input type="text" class="form-control" id="durasi" name="durasi" value="<?= $e['durasi']; ?>" required>
          </div>   
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
