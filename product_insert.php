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
                <!--Enter form from slide 14 here-->
    
                <form action="product_insert_result.php" method="get">
                    Company: <input type="text" name="company" /><br />
                    <!--Insert PHP from slides 13 and 14-->
                     Type: <input type="text" name="type" /><br />
                    Roast: 
                        <input type="radio" name="roast" value="light" />Light 
                        <input type="radio" name="roast" value="medium" />Medium 
                        <input type="radio" name="roast" value="dark" />Dark<br />
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
