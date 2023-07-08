<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <?= csrf_field(); ?>
    <input type="hidden" name="id" value="<?= $product['id'] ?>" />
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" name="country" class="form-control" placeholder="Input Country" value="<?= $product['country'] ?>" required>
        <label for="order_method_type">Order method type</label>
        <input type="text" name="order_method_type" class="form-control" value="<?= $product['order_method_type'] ?>" placeholder="Input Order method type" required>
        <label for="retailer_type">Retailer type</label>
        <input type="text" name="retailer_type" class="form-control" value="<?= $product['retailer_type'] ?>" placeholder="Input Retailer type" required>
        <label for="product_line">Product line</label>
        <input type="text" name="product_line" class="form-control" value="<?= $product['product_line'] ?>" placeholder="InputProduct line" required>
        <label for="item_type">Item Type</label>
        <input type="text" name="item_type" class="form-control" value="<?= $product['item_type'] ?>" placeholder="Input Item Type" required>
        <label for="product">Product</label>
        <input type="text" name="product" class="form-control" value="<?= $product['product'] ?>" placeholder="Input Product" required>
        <label for="year">Year</label>
        <input type="text" name="year" class="form-control" value="<?= $product['year'] ?>" placeholder="Input Year" required>
        <label for="quarter">Quarter</label>
        <input type="text" name="quarter" class="form-control" value="<?= $product['quarter'] ?>" placeholder="Input Quarter" required>
        <label for="total_revenue">Total Revenue</label>
        <input type="text" name="total_revenue" class="form-control" value="<?= $product['total_revenue'] ?>" placeholder="Input Total Revenue" required>
        <label for="units_sold">Units Sold</label>
        <input type="text" name="units_sold" class="form-control" value="<?= $product['units_sold'] ?>" placeholder="Input Units Sold" required>
        <label for="unit_cost">Unit Cost</label>
        <input type="text" name="unit_cost" class="form-control" value="<?= $product['unit_cost'] ?>" placeholder="Input Unit Cost" required>
        <label for="gross_margin">Gross Margin</label>
        <input type="text" name="gross_margin" class="form-control" value="<?= $product['gross_margin'] ?>" placeholder="Input Gross Margin" required>
        <label for="total_profit">Total Profit</label>
        <input type="text" name="total_profit" class="form-control" value="<?= $product['total_profit'] ?>" placeholder="Input Total Profit" required>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Save Edit</button>
    </div>
</form>


<?= $this->endSection() ?>