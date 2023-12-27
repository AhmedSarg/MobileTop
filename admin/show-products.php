<?php
include('includes/header.php');
include('includes/navbar.php');
include '../Back End Code/config.php';
include '../Back End Code/admin.php';

?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
        </div>

        <div class="card-body">
            <button style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Add Product</button>

            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
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
                                <button type="submit" name="add" class="btn btn-primary">Insert Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Model</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Rate</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($allProducts as $product) {
                        echo '<tr>
                        <td class="text-center align-middle"><img width="100px" src="../Front End Code/web/'.$product["picture"].'" alt="'.$product["model"].'"></td>
                        <td class="align-middle">'.$product["name"].'</td>
                        <td class="align-middle">'.$product["model"].'</td>
                        <td class="text-center align-middle">'.$product["price"].'</td>
                        <td class="text-center align-middle">'.$product["discount"].'</td>
                        <td class="text-center align-middle">'.$product["rate"].'</td>
                        <td class="text-center align-middle">
                            <form action="" method="POST">
                                <input type="hidden" name="delete_id" value="'.$product["id"].'">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-info" data-toggle="modal" data-target="#updateProductModal-'.$product["id"].'">Update</button>

                            <div class="modal fade" id="updateProductModal-'.$product["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <!--  update  -->
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="update_id" value="'.$product["id"].'">
                                                <div class="form-group">
                                                    <label class="text-left" for="name">Item Name:</label>
                                                    <input type="text" class="form-control" name="name" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="justify-content-start" for="brand">Item Brand:</label>
                                                    <input type="text" class="form-control" name="model" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Item Price:</label>
                                                    <input type="text" class="form-control" name="price" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Item Image:</label>
                                                    <input type="file" class="form-control" name="picture" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="discount">Discount</label>
                                                    <input type="text" class="form-control" name="discount" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="rate">rate</label>
                                                    <input type="text" class="form-control" name="rate" value="">
                                                </div>
                                                <button type="submit" name="update" class="btn btn-info">Update Product</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');

?>
