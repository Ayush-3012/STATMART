<!DOCTYPE html>

<html>

<head>
        <title>STATMART: SELLER'S PRODUCTS</title>
        <link rel='stylesheet' href='NAVBAR.css'>

<style>
    #home-nav{
        position:relative;
        bottom:85px;
    }

    h1{
     text-align:center;
     font-size:60px;
     font-weight:800;
     border-bottom:1px solid black;
     color:rgb(255, 53, 27);
     text-shadow:0 5px 5px black;
     position:relative;
     bottom:90px;
 }
 .items-body{
     position:relative;
     bottom:90px;
     display:grid;
     gap:20px;
    
 }
 .item-div{
     height:300px;
     width:900px;
     border:1px solid black;
     position:relative;
     left:200px;
     border-radius:20px;
     background:linear-gradient(to right,#ffbcd2,#ff5aa7);
 }
 .item-div img{
     height:300px;
     width:300px;
     border-radius:20px;
 }
 .pr-name{
    font-size:35px;
    position:relative;
    font-weight:700;
    bottom:250px;
    left:30px;
    text-decoration:underline;
 }
 .pr-price{
     font-size:30px;
     position:relative;
     bottom:180px;
     left:340px;
     font-weight:700;
}
.submit-but{
    position:relative;
    bottom:140px;
    left:340px;
    height:50px;
    width:160px;
    font-size:18px;
    background:linear-gradient(rgb(236, 88, 255),rgb(255, 57, 67));
    border:0px;
    cursor:pointer;
}
.hidden{
    display:none;
}
</style>        
</head>

<body id='body'>
    <div class="navbar" id="home-nav">
    <nav id="top-nav">
         <a href="../HomePage.html">
            <h1><i>S t A t M A R t</i></h1>
        </a>
    </nav>
</div>      <!--NAVBAR-->
<h1>SELLER'S PRODUCTS</h1>

<?php
    $connection = mysqli_connect("localhost" , "root" , "" , "seller_and_item")
    or die ("Could't connect to server");
    
    $query = "SELECT * FROM seller_item_info";
    $result = mysqli_query($connection,$query)
    or die("Query failed : " .mysql_error());

    if(mysqli_num_rows($result)>0)
    {
	    while($row = mysqli_fetch_assoc($result))
	    {
            $SELLER_NAME = $row['Seller_Name'];
            $SELLER_PHONE = $row['Seller_Phone'];
            $SELLER_EMAIL = $row['Seller_Email'];
            $SELLER_ADDRESS = $row['Seller_Address'];
            $ITEM_INFO = $row['Item_Info'];
            $ITEM_PRICE = $row['Item_Price'];
            $ITEM_IMAGE = $row['Item_Image'];
?>
    

<div class='full-body'>

    <div class='items-body'>

        <div class='item-div'>
            <img src="<?php echo $ITEM_IMAGE?>">
            <label class='pr-name'><?php echo $ITEM_INFO?></label><br>
            <label class='pr-price'>Price: ₹<?php echo $ITEM_PRICE?></label>
            <form action='SELLER_DETAILS.php'>
                <input type='text' class='hidden' value="<?php echo  $SELLER_NAME?>" name='seller_name'>
                <input type='text' class='hidden' value="<?php echo $ITEM_INFO?>" name='item_name'>
                <button type='submit' class='submit-but'>SELLER'S DETAILS</button>
            </form>
        </div>
        <br>

    </div>

</div>
<?php
        }
    }
?>



</body>

</html>