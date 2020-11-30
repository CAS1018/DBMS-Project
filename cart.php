<?php
    include_once "includes/dbconn.php";
    include_once "includes/cartFunctions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoe Store | Ecommerce Website Project</title>
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
        <header>
            <div class="logo">
                <img src="images/logo1.jpg" width="125" alt="Load error">
            </div>       
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="#footer">About</a></li>
                    <li><a href="#footer">Contacts</a></li>
                </ul>
            </nav>
            <a href="#shopping-cart">
                <div class="cart">
                    <img src="images/cart2.png" alt="shopping cart">
                </div>
            </a>
        </header>
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
            </table>
        </div>
</body>