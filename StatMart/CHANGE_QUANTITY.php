<?php
    $PROD_NAME = $_REQUEST['NAME'];
    $PROD_QUANTITY = $_REQUEST['quantity'];
    echo $PROD_NAME;
    echo "<br>";
    echo $PROD_QUANTITY;

    $connection = mysqli_connect("localhost" , "root" , "" , "SM")
    or die ("Could't connect to server");
    $query = "SELECT * FROM product";
    $result = mysqli_query($connection,$query)
    or die("Query failed : " .mysql_error());

     if(mysqli_num_rows($result)>0)
     {
        while($row = mysqli_fetch_assoc($result))
        {
            if($PROD_NAME==$row['Name'])
            {
                $update =  mysqli_query($connection,"UPDATE product SET Quantity=$PROD_QUANTITY WHERE Name='$PROD_NAME'");
            }
           
        }
     }
     header("Location:CART.php");
     exit();
?>
