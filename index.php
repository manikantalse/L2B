<?php
require('homePageController.php');
$homePageObj = new homePageController();
$productDetails = $homePageObj->getProductDetails();
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </head>


    <body>

    <div class="container-fluid no-padding">
        <div class="page-head">
            <div class="image-container">
                <center><img src="images/Logo_White.png" alt="L2B logo"></center>
            </div>
        </div>
        <div class="page-body">
            <div class="row products-container">
                <?php  foreach($productDetails as $product) { ?>
                        <div class="product col-sm-4">
                            <img src="images/<?php echo $product['picture'];  ?>" alt="product image">
                            <div class="product-details">
                            <strong>Product Name:</strong> <?php echo $product['product_name']; ?><br>
                            <strong>Price:</strong> <?php echo $product['price']; ?><br>
                            </div>
                            <input type="button" class="btn btn-primary cart-btn" value="Add to cart">
                        </div>  
                <?php } ?>       
            </div>

            <div class="shipping">
                <form name="shipping" method="post">
                    <h4> Please enter your shipping address</h4>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-success" value="Buy now">
                </form>
            </div>

        </div>
    </div>

    </body>
</html>