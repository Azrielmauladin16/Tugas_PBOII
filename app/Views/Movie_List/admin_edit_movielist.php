<?= $this->extend('layout/admin/admin_layout_booklist') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <?= csrf_field(); ?>
    <input type="hidden" name="id" value="<?= $booklist['id'] ?>" />
    <div class="form-group">
    <label for="id">NO</label>
            <input type="text" name="id" class="form-control" placeholder="" required>
            <label for="judul" style="margin-top: 15px;">JUDUL</label>
            <input type="text" name="judul" class="form-control" placeholder="" required>
            <label for="penulis" style="margin-top: 15px;">PENULIS/PENGARANG</label>
            <input type="text" name="penulis" class="form-control" placeholder="" required>
            <label for="penerbit" style="margin-top: 15px;">PENERBIT</label>
            <input type="text" name="penerbit" class="form-control" placeholder="" required>
            <label for="rating" style="margin-top: 15px;">RATING</label>
            <input type="text" name="rating" class="form-control" placeholder="" required>
            <label for="ulasan" style="margin-top: 15px;">ULASAN</label>
            <input type="text" name="ulasan" class="form-control" placeholder="" required>
            
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-success">Save Edit</button>
    </div>
</form>


<?= $this->endSection() ?>