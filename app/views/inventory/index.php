<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
      <h3>Inventory List</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mt-2 mb-3 insertDataButton" data-bs-toggle="modal" data-bs-target="#formModal">
          Insert Data
        </button>
        <!-- Search Button -->
        <form action="<?= BASEURL; ?>/inventory/searchData" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Item Data . . ." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-success" type="submit" id="searchButton">Search</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <ul class="list-group">
            <?php foreach($data['inv'] as $inv) : ?>
                <li class="list-group-item">
                    <?= $inv['item_name']; ?>
                    <a href="<?= BASEURL; ?>/inventory/deleteData/<?= $inv['id']; ?>" class="badge rounded-pill text-bg-danger float-end ms-1" onclick="return confirm('Are you sure?');">Delete</a>
                    <a href="<?= BASEURL; ?>/inventory/editData/<?= $inv['id']; ?>" class="badge rounded-pill text-bg-warning float-end ms-1 modalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $inv['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/inventory/detail/<?= $inv['id']; ?>" class="badge rounded-pill text-bg-success float-end ms-1">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="titleModal">Insert Item Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/inventory/insertData" method="post">
        <input type="hidden" id="id" name="id">
        <div class="form-group">
            <label class="mb-2" for="item_name">Item Name</label>
            <input class="form-control" type="text" id="item_name" name="item_name">
        </div>
        <div class="form-group">
            <label class="mt-3 mb-2" for="item_type">Type of Item</label>
            <input class="form-control" type="text" id="item_type" name="item_type">
        </div>
        <div class="form-group">
            <label class="mt-3 mb-2" for="quantity">Quantity</label>
            <input class="form-control" type="text" id="quantity" name="quantity">
        </div>
        <div class="form-group">
            <label class="mt-3 mb-2" for="supplier">Supplier</label>
            <input class="form-control" type="text" id="supplier" name="supplier">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Insert</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
