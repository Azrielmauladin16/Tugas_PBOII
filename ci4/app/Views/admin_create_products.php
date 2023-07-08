<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-xxl">
    <form action="" method="post" id="text-editor">
        <?= csrf_field(); ?>
        <!-- <div class="form-floating mb-3"> -->
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control" placeholder="Input Country" required>
            <label for="order_method_type" style="margin-top: 15px;">Order method type</label>
            <input type="text" name="order_method_type" class="form-control" placeholder="Input Order method type" required>
            <label for="retailer_type" style="margin-top: 15px;">Retailer type</label>
            <input type="text" name="retailer_type" class="form-control" placeholder="Input Retailer type" required>
            <label for="product_line" style="margin-top: 15px;">Product line</label>
            <input type="text" name="product_line" class="form-control" placeholder="InputProduct line" required>
            <label for="item_type" style="margin-top: 15px;">Item Type</label>
            <input type="text" name="item_type" class="form-control" placeholder="Input Item Type" required>
            <label for="product" style="margin-top: 15px;">Product</label>
            <input type="text" name="product" class="form-control" placeholder="Input Product" required>
            <label for="year" style="margin-top: 15px;">Year</label>
            <input type="text" name="year" class="form-control" placeholder="Input Year" required>
            <label for="quarter" style="margin-top: 15px;">Quarter</label>
            <input type="text" name="quarter" class="form-control" placeholder="Input Quarter" required>
            <label for="total_revenue" style="margin-top: 15px;">Total Revenue</label>
            <input type="text" name="total_revenue" class="form-control" placeholder="Input Total Revenue" required>
            <label for="units_sold" style="margin-top: 15px;">Units Sold</label>
            <input type="text" name="units_sold" class="form-control" placeholder="Input Units Sold" required>
            <label for="unit_cost" style="margin-top: 15px;">Unit Cost</label>
            <input type="text" name="unit_cost" class="form-control" placeholder="Input Units Cost" required>
            <label for="gross_margin" style="margin-top: 15px;">Gross Margin</label>
            <input type="text" name="gross_margin" class="form-control" placeholder="Input Gross Margin" required>
            <label for="total_profit" style="margin-top: 15px;">Total Profit</label>
            <input type="text" name="total_profit" class="form-control" placeholder="Input Total Profit" required>
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary" style="margin-top: 15px;">Save</button>
        </div>
    </form>
</div>


<?= $this->endSection() ?>