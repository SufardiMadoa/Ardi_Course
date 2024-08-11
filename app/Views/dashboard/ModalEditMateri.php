<?php foreach ($materi as $m) : ?>
<div class="modal fade" id="editModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $m['id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel<?= $m['id']; ?>">Edit Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('/sufardiWeb/editMateri/' . $m['id']); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="course_id" value="<?= $course_id; ?>">
                    
                    <div class="mb-3">
                        <label for="tanggal<?= $m['id']; ?>" class="form-label text-black">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal<?= $m['id']; ?>" name="tanggal" value="<?= esc($m['tanggal']); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="judul" class="form-label text-black">Judul</label>
                        <input type="text" class="form-control" id="judul<?= $m['id']; ?>" name="judul" value="<?= esc($m['judul_materi']); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="deskripsi<?= $m['id']; ?>" class="form-label text-black">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi<?= $m['id']; ?>" name="deskripsi" rows="3" required><?= esc($m['deskripsi_materi']); ?></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="link<?= $m['id']; ?>" class="form-label text-black">Link</label>
                        <input type="text" class="form-control" id="link<?= $m['id']; ?>" name="link" value="<?= esc($m['link_materi']); ?>" required>
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
