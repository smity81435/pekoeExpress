<html>
<head>
    <title>Express Order</title>
    <link href="css/stylesheet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $first_name = trim($_POST['first_name']);

    }

    if(empty($_POST['choice'])){

        // Adds name to array
        $data_missing[] = 'Choice';

    } else{

        // Trim white space from the name and store the name
        $choice =($_POST['choice']);

    }

    if(empty($_POST['size'])){

        // Adds name to array
        $data_missing[] = 'Size';

    } else {

        // Trim white space from the name and store the name
        $size = ($_POST['size']);

    }

    if(empty($_POST['cream'])){

        // Adds name to array
        $data_missing[] = 'Cream';

    } else {

        // Trim white space from the name and store the name
        $cream = ($_POST['cream']);

    }

    if(empty($_POST['sugar'])){

        // Adds name to array
        $data_missing[] = 'Sugar';

    } else {

        // Trim white space from the name and store the name
        $sugar = ($_POST['sugar']);

    }

    
    if(empty($data_missing)){
        
        require_once('mysqli_connect.php');
        
        $query = "INSERT INTO orders (time, order_id, first_name, choice,
        size, cream, sugar) VALUES (NOW(), NULL, ?,
        ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        if($stmt === FALSE){
            die(mysqli_error($db_conx));}
        
        /*
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        */
        
        mysqli_stmt_bind_param($stmt, "sssss", $first_name,$choice, $size, $cream, $sugar);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Order Placed';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            echo "<meta http-equiv='refresh' content='0;url=thankyou.html'>";
            
        } else {
            
            echo 'Error Occurred: '. mysqli_error($dbc);
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
        
        }
        } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>
<a href="http://www.pekoe.com" alt="Pekoe Homepage"><img class="logo" src="images/pekoelogo.png" alt="Pekoe Logo" ></a>
        <form action="http://creative.colorado.edu/~dosm6711/web/projects/pekoeexpress/orderadded.php" method="post">

        <h1><strong>EXPRESS ORDER</strong></h1>
            
        <div class="name">
            <p>First Name:
                <input type="text" name="first_name" size="30" value="" />
            </p>
        </div>
        
        <div class="choice"> 
            
            
            <input  id="1" type="radio" name="choice"  value="coffee" /><label for="1" class="coffee">Coffee
            </label>
            
            
            <input  id="2" type="radio" name="choice"  value="tea" /><label for="2" class="tea">Tea</label>
            
        </div> 
        
        <div class="sizes">
            <h2><p>Size</p></h2>
            
            
                
                <input id="3" type="radio" name="size"  value="S" /><label for="3">Small
                </label>

                
                <input id="4" type="radio" name="size"  value="M" /><label for="4">Medium
                </label> 

                
                <input id="5" type="radio" name="size"  value="L" /><label for="5">Large
                </label> 
        </div>
            
        
        <div class="cream">
            <h2><p>Cream</p></h2>
            
            
            <input id="6" type="radio" name="cream"  value="YES" /><label for="6">Yes
            </label>
            
            
            <input id="7" type="radio" name="cream"  value="NO" /><label for="7">No
            </label>
            
        </div>
            
        
        <div class="sugar">
            <h2><p>Sugar</p></h2>
            
            
            <input id="8" type="radio" name="sugar"  value="YES" /><label for="8">Yes
            </label>
            
            
            <input id="9" type="radio" name="sugar"  value="NO" /><label for="9">No
            </label>
            
        </div>
        
        <div class="submit">
        <p>
        <input type="submit" name="submit" value="Send it!" />
        </p>
        </div>

        </form>
</body>
</html>