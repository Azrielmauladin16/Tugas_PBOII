<?= $this->extend('layout/admin/admin_layout_booklist') ?>
<?= $this->section('content') ?>
<h2> My Movie List</h2>
<table class="table">
    <thead>
        <tr>
            <th>NO.</th>
            <th>Judul</th>
            <th>Penulis/Pengarang</th>
            <th>Penerbit</th>
            <th>Rating</th>
            <th>Ulasan</th>
            <th>Setting</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movielist as $movielist2) : ?>
            <tr>
                <td><?= $movielist2['id'] ?></td>
                <td><?= $movielist2['judul'] ?></td>
                <td><?= $movielist2['penulis'] ?></td>
                <td><?= $movielist2['penerbit'] ?></td>
                <td><?= $movielist2['rating'] ?></td>
                <td><?= $movielist2['ulasan'] ?></td>
                
                
                <td>
                    <a href="<?= base_url('admin/movielist/' . $movielist2['id'] . '/edit') ?>" class="btn btn-sm btn-outline-success">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/movielist/' . $movielist2['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
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