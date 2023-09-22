<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Product Details</h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="ProductName">Product Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="ProductName" placeholder="Enter Product Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductDescription">Description:</label>
                        <select class="form-control" name="ProductDescription">
                            <option value="Solid" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Solid') ? 'selected' : '' ?>>Solid</option>
                            <option value="Liquid" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Liquid') ? 'selected' : '' ?>>Liquid</option>
                            <option value="Other" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Other') ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ProductCategory">Category:</label>
                        <input type="text" class="form-control" name="ProductCategory" placeholder="Enter Category" value="<?= isset($pro['ProductCategory']) ? $pro['ProductCategory'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductQuantity">Quantity:</label>
                        <input type="text" class="form-control" name="ProductQuantity" placeholder="Enter Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductPrice">Price:</label>
                        <input type="text" class="form-control" name="ProductPrice" placeholder="Enter Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Product List</h2>
                <ul class="list-group">
                    <?php foreach ($product as $pr) : ?>
                        <li class="list-group-item">
                            <strong>Product Name:</strong> <?= $pr['ProductName'] ?><br>
                            <strong>Product Description:</strong> <?= $pr['ProductDescription'] ?><br>
                            <strong>Product Category:</strong> <?= $pr['ProductCategory'] ?><br>
                            <strong>Product Quantity:</strong> <?= $pr['ProductQuantity'] ?><br>
                            <strong>Product Price:</strong> <?= $pr['ProductPrice'] ?><br>
                            <div>
                                <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

 

</html>