<?php
    $NAME = $_REQUEST['prod_name'];
    
    $connection = mysqli_connect("localhost","root","","sm")
    or die ("Coudn't connect to the server");   

    $query = "SELECT * FROM  product";

    $result = mysqli_query($connection,$query)
    or die("QUERY failed :" .mysql_error());

    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
           if($NAME==$row['Name'])
           {
               $del = mysqli_query($connection,"DELETE FROM product WHERE Name='$NAME'");
           }
        }
        echo "<script>alert('Item deleted from cart');</script>";
        mysqli_close($connection);
    }
    header("Location:CART.php");
    exit();
?>