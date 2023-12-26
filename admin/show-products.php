<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
        </div>

        <div class="card-body">
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="item_name">Item Name:</label>
                                    <input type="text" class="form-control" name="item_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="item_brand">Item Brand:</label>
                                    <input type="text" class="form-control" name="item_brand" required>
                                </div>
                                <div class="form-group">
                                    <label for="item_price">Item Price:</label>
                                    <input type="text" class="form-control" name="item_price" required>
                                </div>
                                <div class="form-group">
                                    <label for="item_image">Item Image:</label>
                                    <input type="text" class="form-control" name="item_image" required>
                                </div>
                                <div class="form-group">
                                    <label for="item_register">Item Register:</label>
                                    <input type="text" class="form-control" name="item_register" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>item_id</th>
                        <th>item_name</th>
                        <th>item_brand</th>
                        <th>item_price</th>
                        <th>item_image</th>
                        <th>item_register</th>
                    </tr>
                    </thead>
                    <tbody>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');

?>
