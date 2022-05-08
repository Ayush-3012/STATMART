<!DOCTYPE html>

<html>

<head>
        <title>STATMART: CART</title>
        <link rel='stylesheet' href='NAVBAR.css'>

<style>
    #body{
        overflow-x:hidden;
    }
    #home-nav{
        position:relative;
        bottom:84px;
    }
    .cart-body{
        position:relative;
        bottom:80px;
    }
    h1{
        text-align:center;
        font-size:60px;
        font-weight:800;
        border-bottom:1px solid black;
        color:rgb(70, 73, 255);
        text-shadow:0 5px 5px black;
        position:relative;
        bottom:90px;
    }
    .product-div{
        height:260px;
        border:1px solid rgb(129, 52, 125);
        position:relative;
        border-radius:40px;
        background:repeating-linear-gradient(-45deg,#26a1ff, #7affd7 15%, #4a83ff 20%);
    }
    .product-div img{
        height:200px;
        width:220px;
        position:relative;
        top:30px;
        left:40px;
        border:2px solid black;
    }
    .pr-name{
        font-size:30px;
        position:relative;
        bottom:150px;
        left:60px;
        text-decoration:underline;
        color:rgb(69, 0, 126);
        font-weight:700;

    }
    .pr-quantity{
        position:relative;
        left:290px;
        bottom:90px;
        font-size:25px;
        
    }
    input{
        width:40px;
        height:30px;
        font-size:20px;
        background-color:rgb(196, 253, 255);
        text-align:center;
    }
    .del_from_cart{
        position:relative;
        bottom:80px;
        left:290px;
        height:40px;
        width:110px;
        border:0px;
        cursor:pointer;
        background:linear-gradient(#80edfc,#0101ff);
        font-size:18px;
        font-weight:500;
    }
    .del_from_cart:hover{
         color:white;
         border:1px dotted white;
    }
    .pr-price{
        position:absolute;
        right:100px;
        bottom:100px;
        font-size:30px;
        font-weight:800;
        color:rgb(0, 58, 50);
    }
    .product-div{
        border-collapse:collapse;
    }
    .total-price{
        border:1px solid black;
    }
    .total-price h3{
        position:absolute;
        right:90px;
        font-size:30px;
        color:rgb(0, 58, 50);
        font-weight:800;
        text-decoration:underline;
    }
    .buy{
        height:100px;
        width:100%;
        position:relative;
        top:60px;
    }
    .buy button{
        position:absolute;
        right:120px;
        height:50px;
        width:150px;
        cursor:pointer;
        background:linear-gradient(to right,#a9ffe5,#0099ff);
        border:1px solid rgb(135, 211, 255);
        font-size:18px;
        font-weight:500;
    }
    .buy button:hover{
        background:linear-gradient(#31c5ff,#000286);
        color:white;
        font-weight:600;
        border-radius:20px;
        border:0px;
    }
    .empty-cart h2{
        text-align:center;
        position:relative;
        bottom:40px;
        font-size:40px;
        color:rgb(139, 0, 53);
    }
    .hidden{
        display:none;
    }
    .quant_but{
         position:relative;
         top:60px;
         height:60px;
         right:10px;
         width:130px;
         border:0px;
         cursor:pointer;
         background:linear-gradient(to right,#80edfc,#0101ff);
         font-size:18px;
         font-weight:500;
    }
    .quant_but:hover{
        color:white;
        border:1px dotted white;
    }



    .cart-body{
        display:block;
    }
    .empty-cart{
        display:none;
    }
</style>        
</head>


<body id='body'>

    <div class="navbar" id="home-nav">
        <nav id="top-nav">
            <a href="HomePage.html">
                <h1><i>S t A t M A R t</i></h1>
            </a>
        </nav>
    </div>      <!--NAVBAR-->
<?php 
    echo "<script>
        var cart_body = document.getElementsByClassName('cart-body');
        var empty_cart = document.getElementsByClassName('empty_cart');
        </script>";
    $connection = mysqli_connect("localhost" , "root" , "" , "SM")
	or die ("Could't connect to server");

	$query = "SELECT * FROM Product";
	$result = mysqli_query($connection,$query)
	or die("Query failed : " .mysql_error());
    $Total_Price = 0;
    $Item = 0;
	
	
?>
 <h1>SHOPPING CART</h1>
 <?php 
 if(mysqli_num_rows($result)>0)
 {
     echo "<script>
        cart_body.style.display = 'block';
        empty_cart.style.display = 'none';
        </script>";
     
     while($row = mysqli_fetch_assoc($result))
     {
         $Item += $row['Item_No'];
         $Photo=$row['Image'];
         $Name=$row['Name'];
         $Rate=$row['Price'];
         $QUANTITY = $row['Quantity'];
         $PRODUCT_PRICE = $Rate*$QUANTITY;
         $Total_Price += $PRODUCT_PRICE;
?>
<div class='cart-body'>

        <div class='products-body'>

            <div class='product-div'>
                <img src = "<?php echo $Photo?>" >
                <label class='pr-name'><?php echo "$Name" ?></label>

                <form class='pr-quantity' method='post' action='CHANGE_QUANTITY.php'>
                    <input type='text' name='NAME' value='<?php echo "$Name"?>' class='hidden'>
                    <label>Quantity :</label>
                    <input type='number' min='1' max='10' value="<?php echo $QUANTITY?>" name="quantity">
                    <button type='submit' class='quant_but'>CHANGE QUANTITY</button>
                </form>

               
                <div class='pr-price'>

                    <label>Price : </label>
                    <label class='price'><?php echo "₹$PRODUCT_PRICE";?></label>
                </div>

                <form method='post' action='Delete_Cart.php'>
                    <input class='hidden' type='text' value='<?php echo $Name?>' name='prod_name'>
                    <button class='del_from_cart'>DELETE</button>
                </form>
            </div>
            <br><br><br><br>

<?php
	}
		
}
else 
{
    echo "<script>
    cart_body.style.display = 'none';
    empty_cart.style.display = 'block';
   </script>";
}
?>
        </div>  <!--products-body-->

        <div class='total-price'>
            <h3>Subtotal : <?php echo "₹ $Total_Price" ?></h3>
        </div>
        <br><br><br>

        <form class='buy' action='Customer_Info.html'>
            <button type='submit'>PURCHASE</button>
        </form>

</div>      <!--cart-body-->

 <div class='empty-cart'>
    <h2>YOUR CART IS EMPTY!!<br> YOU CAN ADD SOME PRODUCTS.</h2>
</div>   




</body>


</html>