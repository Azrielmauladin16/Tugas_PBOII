<?= $this->extend('layout/admin/admin_layout_booklist') ?>
<?= $this->section('content') ?>
<h2> My Job List</h2>
<table class="table">
    <thead>
        <tr>
            <th>NO.</th>
            <th>Tugas</th>
            <th>Pemberi Tugas</th>
            <th>Waktu pengerjaan</th>
            <th>Deadline</th>
            <th>Keterangan</th>
            <th>Setting</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($joblist as $joblist2) : ?>
            <tr>
                <td><?= $joblist2['id'] ?></td>
                <td><?= $joblist2['tugas'] ?></td>
                <td><?= $joblist2['atasan'] ?></td>
                <td><?= $joblist2['waktu_pengerjaan'] ?></td>
                <td><?= $joblist2['deadline'] ?></td>
                <td><?= $joblist2['keterangan'] ?></td>
                
                
                <td>
                    <a href="<?= base_url('admin/joblist/' . $joblist2['id'] . '/edit') ?>" class="btn btn-sm btn-outline-success">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/joblist/' . $joblist2['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Are you sure?</h2>
                <p>The data will be deleted and lost forever</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>

<?= $this->endSection() ?>