<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Inventory List</h3>
            <?php foreach($data['inv'] as $inv) : ?>
                <ul>
                    <li><?= $inv['item_name']; ?></li>
                    <li><?= $inv['item_type']; ?></li>
                    <li><?= $inv['quantity']; ?></li>
                    <li><?= $inv['supplier']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>