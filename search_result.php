<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 3 Search Results</title>
    </head>
    
    <body>
        <div class="wrapper">
            <div class="headline"></div>
    
            <div class="header">
                <h1>Show Product</h1>
            </div>
    
            <div class="navbar">
                <a href="product_show.php" class="nav">Show Product</a>
                <a href="product_insert.php" class="nav">Insert Product</a>
                <a href="company_show.php" class="nav">Show Company</a>
                <a href="company_insert.html" class="nav">Insert Company</a>
            </div>
    
            <div class="content">
                <?php
                	
                	
                    include 'include/db.inc.php';				
                
                    $keyword = $_GET['keyword'];
    
                    echo '<h3>Search results for: ' . $keyword . '</h3>';
                                        
                    $fields="SELECT 
                            product.product_id as product_id,       
                            product.type as type, 
                            product.roast as roast, 
                            product.company as company,
                            product.description as description, 
                            company.company_id as company_id,                           
                            company.name as name ";
                            
                        $table="FROM product, company ";
                        
                        $where="where 1=1 and 
                                product.company=company.company_id";
                                
                        if ($keyword != ''){
                            $where .= " AND product.description LIKE '%$keyword%'";
                        }
                                
                       $sql=$fields.$table.$where;
        
                    $result = mysqli_query($link, $sql);
                    if (!$result) {     
                        $error = 'Error fetching data: ' . mysqli_error($link);
                        echo $error;    
                        exit();
                    }
                    
                    //$recording = mysqli_fetch_array($result);
                    /*While the search results hold true, e.g. if you searched for medium roast--while there are products with a medium roast, display the following*/
                    while($recording = mysqli_fetch_array($result)){
                        $product_id = htmlspecialchars($recording['product_id'], ENT_QUOTES, 'UTF-8');
                        /*this value is actually from the company table, but since we named them above, we can call it without another while loop like in the product_show.php example*/
                        $company = htmlspecialchars($recording['name'], ENT_QUOTES, 'UTF-8');
                        $type = htmlspecialchars($recording['type'], ENT_QUOTES, 'UTF-8');
                        $roast = htmlspecialchars($recording['roast'], ENT_QUOTES, 'UTF-8');
                        $description = htmlspecialchars($recording['description'], ENT_QUOTES, 'UTF-8');
                    
                        echo "<div class='product'>
                                    <div class='company'>" . $company . "--";
                        echo "<span class='type'> " . $type . "</span></div>";                      
                        echo "<div class='roast'>Roast: " . $roast . "</div>";
                        echo "<div class='description'> " . $description . "</div>                      
                        </div>";    
                    }
                    
                            
                ?>
            </div>
    
            <div class="footer">
                <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By" height="45" /> Izzy Johnston, in conjunction with Girl Develop It!
            </div>
        </div>
    </body>
</html>
