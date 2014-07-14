<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 2 Product Insert Form</title>
    </head>
    
    <body>
        <div class="wrapper">
            <div class="headline"></div>
    
            <div class="header">
                <h1>Create a form to Insert Product</h1>
            </div>
    
            <div class="navbar">
                <a href="product_show.php" class="nav">Show Product</a>
                <a href="product_insert.php" class="navcurr">Insert Product</a>
                <a href="company_show.php" class="nav">Show Company</a>
                <a href="company_insert.html" class="nav">Insert Company</a>
            </div>
    

            
            <div class="content">
        
                <form action="product_insert_result.php" method="get">
                    Company: 
                        <select name="company">
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
                                echo "<option value=$c_id>" . " ". $c_name. "</option>";        
                            }
                                
                            ?>
            
            
                        </select>
                        <br />
                    Type: <input type="text" name="type" /><br />
                    Roast: <input type="radio" name="roast" value="light" />
                        Light <input type="radio" name="roast" value="medium" />
                        Medium <input type="radio" name="roast" value="dark" />
                        Dark<br />
                    <textarea name="description" rows="10" cols="40"></textarea><br />
                    <input type="submit" value="Submit" />
                </form>
                
            </div>
    
            <div class="footer">
                <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By" height="45" /> Izzy Johnston, in conjunction with Girl Develop It!
            </div>
        </div>
    </body>
</html>
