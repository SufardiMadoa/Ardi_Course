<?php foreach ($materi as $m) : ?>
<div class="modal fade" id="deleteModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $m['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel<?= $m['id']; ?>">Konfirmasi Penghapusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus item dengan ID <?= $m['id']; ?>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="/sufardiWeb/deleteMateri/<?= $m['id']; ?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>