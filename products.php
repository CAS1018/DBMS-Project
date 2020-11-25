<?php
    include_once "includes/dbconn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoe Store | Ecommerce Website Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" id="Home">
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
    </div>
   <!-- display products with php pagination -->
   <div class="products">
        <?php 
            //define num of result per page
            $results_per_page = 10;
            
            $sql_query = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql_query);
            $number_of_results = mysqli_num_rows($result);
            
            while ($row = mysqli_fetch_array($result)) {
                echo $row['name-desc'] . ' ' . $row['price'] . '<br>';
            }
            
            $number_of_pages = ceil($number_of_results / $results_per_page);
            
            for ($page=1; $page <= $number_of_pages; ++$page) {
                echo '<a href = "index2.php?page=' . $page . '">' . $page . '</a> ';
            }
        ?>
    </div>
</body>
</html>