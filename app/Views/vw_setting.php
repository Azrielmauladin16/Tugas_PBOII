<?= $this->extend('layout/admin/admin_layout_booklist') ?>
<?= $this->section('content') ?>
<h2> Maintenance</h2>


<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>

<?= $this->endSection() ?>