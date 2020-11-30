<?php 
    //define num of result per page
    $results_per_page = 12;
    
    $sql_query = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql_query);
    $number_of_results = mysqli_num_rows($result);
    
    
    //find number of total pages needed
    $number_of_pages = ceil($number_of_results / $results_per_page);
    
    //find which page number visitor is on
    if (!isset($_GET['page'])) {
        $page = 1;
    }
    else {
        $page = $_GET['page'];
    }
        
    //find sql limit starting num for results of products
    $this_page_first_result = ($page-1) * $results_per_page;
    
    //retrieve selected product results from db
    $sql_query = "SELECT * FROM products LIMIT " . $this_page_first_result  . ',' . $results_per_page;
    $result = mysqli_query($conn, $sql_query);
    
    while ($row = mysqli_fetch_array($result)) { ?>
    
        <div class="col-md prod_block">
            <img src="<?php echo $row['imageURL']; ?>"> 
            
            <div class="cold-md prod_desc">
                <p><?php echo $row['name_desc']; ?> </p> 
            </div>
            
            <div class="row price_cart">
                <div class="col-md price">
                    <p> <?php echo $row['price'] . ' ' . $row['currency'] ?> </p>
                </div>
        
                <div class="col-md pag_cart">
                    <input type="image" src="images/cart1.png" name="add_to_cart" class="cartbtn" value="Add to Cart">
                    <input type="hidden" name="hidden_name" value="<?php echo $row['name_desc']; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" />
                    <input type="hidden" name="hidden_img" value="<?php echo $row['imageURL']; ?>" />
                </div>
                
            </div>
        </div>
        
        <?php } ?>
        
        <div class="links">
            <?php
                //display links to the pages
                for ($page=1; $page <= $number_of_pages; ++$page) {
                    echo '<a href="products.php?page=' . $page . '">' . $page . '</a> ';
                }
            ?>
        </div>