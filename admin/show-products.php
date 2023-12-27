<?php
include('includes/header.php');
include('includes/navbar.php');
include '../Back End Code/admin.php';

?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
        </div>

        <div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Add Product</button>

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
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="update_id" value="">
                                <div class="form-group">
                                    <label for="name">Item Name:</label>
                                    <input type="text" class="form-control" name="name" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Item Brand:</label>
                                    <input type="text" class="form-control" name="model" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Item Price:</label>
                                    <input type="text" class="form-control" name="price" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Item Image:</label>
                                    <input type="file" class="form-control" name="picture" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="text" class="form-control" name="discount" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="rate">Rate</label>
                                    <input type="text" class="form-control" name="rate" value="" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Insert Product</button>
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
                        <th>item_rate</th>
                        <th>item_Discount</th>
                        <th>Delete</th> 
                        <th>Update</th> 
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="delete_id" value="">
                                <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-info" data-toggle="modal" data-target="#updateProductModal">Update</button>

                            <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--  update  -->
                                            <form action="" method="POST">
                                                <input type="hidden" name="update_id" value="">
                                                <div class="form-group">
                                                    <label for="name">Item Name:</label>
                                                    <input type="text" class="form-control" name="name" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="brand">Item Brand:</label>
                                                    <input type="text" class="form-control" name="model" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Item Price:</label>
                                                    <input type="text" class="form-control" name="price" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Item Image:</label>
                                                    <input type="file" class="form-control" name="picture" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="discount">Discount</label>
                                                    <input type="text" class="form-control" name="discount" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rate">rate</label>
                                                    <input type="text" class="form-control" name="rate" value="" required>
                                                </div>                                                <button type="submit" name="update_btn" class="btn btn-info">Update Product</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');

?>
