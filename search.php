<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="assets/style.css" type="text/css" rel="stylesheet"/>
        <title>PHP Class 3 Search</title>
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
                
                <form action="search_result.php" method="get">
                    <input type="text" name="keyword">
                    <input type="submit" value="Search">
                </form>

                
            </div>
    
            <div class="footer">
                <img src="assets/cc_by.png" alt="Creative Commons Licensed By" title="Creative Commons Licensed By" height="45" /> Izzy Johnston, in conjunction with Girl Develop It!
            </div>
        </div>
    </body>
</html>
