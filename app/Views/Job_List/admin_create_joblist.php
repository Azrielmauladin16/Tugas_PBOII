<?= $this->extend('layout/admin/admin_layout_booklist') ?>

<?= $this->section('content') ?>
<div class="container-xxl">
    <form action="" method="post" id="text-editor">
        <?= csrf_field(); ?>
        <!-- <div class="form-floating mb-3"> -->
        <div class="form-group">
            <label for="id">NO</label>
            <input type="text" name="id" class="form-control" placeholder="" required>
            <label for="tugas" style="margin-top: 15px;">TUGAS</label>
            <input type="text" name="tugas" class="form-control" placeholder="" required>
            <label for="atasan" style="margin-top: 15px;">PEMBERI TUGAS</label>
            <input type="text" name="atasan" class="form-control" placeholder="" required>
            <label for="waktu_pengerjaan" style="margin-top: 15px;">WAKTU PENGERJAAN</label>
            <input type="text" name="waktu_pengerjaan" class="form-control" placeholder="" required>
            <label for="deadline" style="margin-top: 15px;">DEADLINE</label>
            <input type="text" name="deadline" class="form-control" placeholder="" required>
            <label for="keterangan" style="margin-top: 15px;">KETERANGAN</label>
            <input type="text" name="keterangan" class="form-control" placeholder="" required>
            
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-success" style="margin-top: 15px;">Save</button>
        </div>
    </form>
</div>


<?= $this->endSection() ?>