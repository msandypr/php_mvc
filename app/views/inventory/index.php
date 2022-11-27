<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Inventory List</h3>
            <ul class="list-group">
            <?php foreach($data['inv'] as $inv) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $inv['item_name']; ?>
                    <a href="<?= BASEURL; ?>/inventory/detail/<?= $inv['id']; ?>" class="badge rounded-pill text-bg-success">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>