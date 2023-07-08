<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Country</th>
            <th>Order method type</th>
            <th>Retailer type</th>
            <th>Product line</th>
            <th>Item Type</th>
            <th>Product</th>
            <th>Year</th>
            <th>Quarter</th>
            <th>Total Revenue</th>
            <th>Units Sold</th>
            <th>Unit Cost</th>
            <th>Gross Margin</th>
            <th>Total Profit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $products) : ?>
            <tr>
                <td><?= $products['id'] ?></td>
                <td><?= $products['country'] ?></td>
                <td><?= $products['order_method_type'] ?></td>
                <td><?= $products['retailer_type'] ?></td>
                <td><?= $products['product_line'] ?></td>
                <td><?= $products['item_type'] ?></td>
                <td><?= $products['product'] ?></td>
                <td><?= $products['year'] ?></td>
                <td><?= $products['quarter'] ?></td>
                <td><?= $products['total_revenue'] ?></td>
                <td><?= $products['units_sold'] ?></td>
                <td><?= $products['unit_cost'] ?></td>
                <td><?= $products['gross_margin'] ?></td>
                <td><?= $products['total_profit'] ?></td>
                <td>
                    <a href="<?= base_url('admin/product/' . $products['id'] . '/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/product/' . $products['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
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