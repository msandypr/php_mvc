<div class="container mb-5">
    <h1 class="mt-3 mb-3">Item Details</h1>
    <hr class="my-4">
</div>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
    <img src="<?= BASEURL; ?>/img/blank_image.jpg" class="card-img-top" alt="<?= $data['inv']['item_name']; ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $data['inv']['item_name']; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Type : <?= $data['inv']['item_type']; ?></li>
        <li class="list-group-item">Quantity : <?= $data['inv']['quantity']; ?></li>
        <li class="list-group-item">Supplier : <?= $data['inv']['supplier']; ?></li>
    </ul>
    <div class="card-body d-flex justify-content-center">
        <a href="<?= BASEURL; ?>/inventory" class="btn btn-danger">Close</a>
    </div>
    </div>
</div>