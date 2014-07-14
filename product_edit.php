<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 3 Edit Product</title>
    </head>

    <body>
        <div class="wrapper">
            <div class="headline"></div>
    
            <div class="header">
                <h1>Show Product</h1>
            </div>
    
            <div class="navbar">
                <a href="product_show.php" class="nav">Show Product</a>
                <a href="product_insert.php" class="navcurr">Insert Product</a>
                <a href="company_show.php" class="nav">Show Company</a>
                <a href="company_insert.html" class="nav">Insert Company</a>
            </div>
    
            <div class="content">
                <?php 
                
                include 'include/db.inc.php';
                
                $product_id = $_GET['product_id'];
                
                $sql = 'SELECT * FROM product WHERE product_id = ' . $product_id;
                
                $result = mysqli_query($link, $sql);
                if (!$result) {     
                    $error = 'Error: ' . mysqli_error($link);   
                    echo $error;    
                    exit();
                };
                
                $recording = mysqli_fetch_array($result);
                
                /*echo '<pre>';
                print_r($recording);
                echo '</pre>';
                
                exit();*/
                
                
                    $company = htmlspecialchars($recording['company'], ENT_QUOTES, 'UTF-8');
                    $type = htmlspecialchars($recording['type'], ENT_QUOTES, 'UTF-8');
                    $roast = htmlspecialchars($recording['roast'], ENT_QUOTES, 'UTF-8');
                    $description = htmlspecialchars($recording['description'], ENT_QUOTES, 'UTF-8');
    
    
    
                
                //echo $link;

    
                ?>
                
                
                <form action="product_edit_result.php" method="get">
                    Company: <select name="company">
                            <option value="">Choose a company!</option>
                            
                            <?php
                
                                include 'include/db.inc.php';
                                $sql='SELECT company_id, name FROM company ORDER BY name';
                                $result = mysqli_query($link, $sql);                        
                                if (!$result) {                                     
                                    $error = 'Error fetching data: ' . mysqli_error($link);                                 
                                    echo $error; 
                                    exit();             
                                }
                                
                                while($recording=mysqli_fetch_array($result)){
                                    $c_id=htmlspecialchars($recording['company_id'], ENT_QUOTES, 'UTF-8');                      
                                    $c_name=htmlspecialchars($recording['name'], ENT_QUOTES, 'UTF-8');                          
                                    if($company == $c_id) {
                                        echo "<option selected='selected' value=$c_id>" . " ". $c_name. "</option>";        

                                    } else {
                                        echo "<option value=$c_id>" . " ". $c_name. "</option>";        

                                    }
                            }
                                
                            ?>
            
            
                        </select><br />
                    
                    
                                        Type: <input type="text" name="type" value="<?php echo $type; ?>" /><br />
                    Roast: <input type="radio" name="roast" value="light" <?php if ($roast=="light") echo "checked='checked'" ?> />
                        Light 
                        
                        <input type="radio" name="roast" value="medium" <?php if ($roast=="medium") echo "checked='checked'"  ?> />
                        Medium 
                        
                        <input type="radio" name="roast" value="dark" <?php if ($roast=="dark") echo "checked='checked'" ?> />
                        Dark<br />
                    <textarea name="description" rows="10" cols="40"><?php echo $description; ?>
                    </textarea><br />
                    
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                    <input type="submit" value="Submit" />
                </form>

                
            </div>
    
            <div class="footer">
                <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By" height="45"> Izzy Johnston, in conjunction with Girl Develop It!
            </div>
        </div>
    </body>
</html>
