<?php

    $SELLER_NAME = $_REQUEST['seller_name'];
    $SELLER_PHONE = $_REQUEST['seller_phone'];
    $SELLER_EMAIL = $_REQUEST['seller_email'];
    $SELLER_ADDRESS = $_REQUEST['seller_address'];
    $ITEM_INFO = $_REQUEST['item_info'];
    $ITEM_IMAGE = $_REQUEST['item_image'];
    $ITEM_PRICE = $_REQUEST['item_price'];


    $connection = mysqli_connect("localhost","root","") or die ("Couldn't connect ot server");
    
    $create_db = "CREATE DATABASE IF NOT EXISTS SELLER_AND_ITEM";
    
    $link_db = mysqli_query($connection, $create_db) or die ("Query failed : " .mysql_error ($connection));
    
    $connect_db = mysqli_select_db($connection,"SELLER_AND_ITEM") or die ("Couldn't connect to database");
    
    $create_table = "CREATE TABLE IF NOT EXISTS Seller_Item_Info (Seller_Name VARCHAR(20), Seller_Phone BIGINT(15), Seller_Email VARCHAR(50), Seller_Address VARCHAR(50), Item_Info VARCHAR(400), Item_Price INT(6), Item_Image VARBINARY(500))";
    
    $link_table = mysqli_query($connection, $create_table) or die ("Query failed : " . mysql_error ($connection));
    
    $insert_table = "INSERT INTO Seller_Item_Info (Seller_Name, Seller_Phone, Seller_Email, Seller_Address, Item_Info, Item_Price, Item_Image) VALUES ('$SELLER_NAME','$SELLER_PHONE','$SELLER_EMAIL','$SELLER_ADDRESS','$ITEM_INFO','$ITEM_PRICE','$ITEM_IMAGE')";
    
    $connect_info = mysqli_query($connection, $insert_table) or die ("Query failed : " . mysql_error ($connection));
    
    $query = "SELECT * FROM Seller_Item_Info";

    $result = mysqli_query($connection, $query) or die ("Query Failed:".mysql_error());

    echo "<script>
        alert('Your Product is Uploaded. Thank You!');
        window.open('SELLER_PRODUCT2.php','_self');
    </script>";
    // if(mysqli_num_rows($result) > 0)
    // {
    //     while($row = mysqli_fetch_assoc($result))
    //     {
    //         $SELLER_NAME = $row['Seller_Name'];
    //         $SELLER_PHONE = $row['Seller_Phone'];
    //         $SELLER_EMAIL = $row['Seller_Email'];
    //         $SELLER_ADDRESS = $row['Seller_Address'];
    //         $ITEM_INFO = $row['Item_Info'];
    //         $ITEM_IMAGE = $row['Item_Image'];

    //         echo "<tr>
    //                 <td> $SELLER_NAME <br> </td>
    //                 <td> $SELLER_PHONE <br> </td>
    //                 <td> $SELLER_EMAIL <br> </td>
    //                 <td> $SELLER_ADDRESS <br> </td>
    //                 <td> $ITEM_INFO <br> </td>
    //                 <td> <img src='$ITEM_IMAGE'> <br> </td>
    //             </tr>";
    //     }
    // }
?>