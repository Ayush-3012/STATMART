<?php
    // $NAME = $_REQUEST['prod_name'];
    $CUSTOMER_NAME = $_REQUEST['customer_name'];
    $CUSTOMER_EMAIL = $_REQUEST['customer_email'];
    $CUSTOMER_ADDRESS = $_REQUEST['customer_address'];
    $CUSTOMER_CITY = $_REQUEST['customer_city'];
    $CUSTOMER_STATE = $_REQUEST['customer_state'];
    $CUSTOMER_ZIP_CODE = $_REQUEST['customer_zip_code'];
    $CUSTOMER_PHONE = $_REQUEST['customer_phone'];
    $PAYMENT_MODE = "";

    if(isset($_REQUEST['payment_mode']))
    {
        $PAYMENT_MODE = $_REQUEST['payment_mode'];
    }

    $connection = mysqli_connect("localhost","root","") or die ("Couldn't connect ot server");
    
    $create_db = "CREATE DATABASE IF NOT EXISTS PLACED_ORDER";
    
    $link_db = mysqli_query($connection, $create_db) or die ("Query failed : " .mysql_error ($connection));
    
    $connect_db = mysqli_select_db($connection,"PLACED_ORDER") or die ("Couldn't connect to database");
    
    $create_table = "CREATE TABLE IF NOT EXISTS Customer_Info (Customer_Name VARCHAR(20),  Customer_Email VARCHAR(50), Customer_Address VARCHAR(100), Customer_City VARCHAR(20), Customer_State VARCHAR(20), Customer_Zip_Code BIGINT(10), Customer_Phone BIGINT(15), Payment_Option VARCHAR(20))";
    
    $link_table = mysqli_query($connection, $create_table) or die ("Query failed : " . mysql_error ($connection));
    
    $insert_table = "INSERT INTO Customer_Info (Customer_Name, Customer_Email, Customer_Address, Customer_City, Customer_State, Customer_Zip_Code, Customer_Phone, Payment_Option) VALUES ('$CUSTOMER_NAME','$CUSTOMER_EMAIL','$CUSTOMER_ADDRESS','$CUSTOMER_CITY','$CUSTOMER_STATE','$CUSTOMER_ZIP_CODE','$CUSTOMER_PHONE','$PAYMENT_MODE')";
    
    $connect_info = mysqli_query($connection, $insert_table) or die ("Query failed : " . mysql_error ($connection));
    
    $query = "SELECT * FROM Customer_Info";

    $result = mysqli_query($connection, $query) or die ("Query Failed:".mysql_error());

    echo "<script>
        alert('Your STATMART order has been placed successfully and will be delivered soon. Thank You!');
        window.open('HomePage.html','_self');
    </script>";

    $connection = mysqli_connect("localhost","root","","sm")
    or die ("Coudn't connect to the server");

    $truncate_table = mysqli_query($connection, "TRUNCATE TABLE product");

?>