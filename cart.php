
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "root", "dbms");
include_once "includes/cartFunctions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shoe Store | Ecommerce Website Project</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="bs5/css/bootstrap.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<!-- <script src="htps://umpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script> -->
		<script src="bs5/js/bootstrap.js"></script>
	</head>
	<body>
	
		<header>
			<div class="logo">
				<img src="images/logo1.jpg" width="125" alt="Load error">
			</div>       
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="#footer">About</a></li>
					<li><a href="#footer">Contacts</a></li>
				</ul>
			</nav>
			<a href="cart.php">
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
                <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                ?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                    <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
                }
                ?>
                    
            </table>
        </div>
    </body>
</html>