<!DOCTYPE html>

<html>

<head>
    <title>STATMART: SELLER'S DETAILS</title>
    <link rel='stylesheet' href='NAVBAR.css'>

<style>
  #home-nav{
    position:relative;
    bottom:85px;
  }
  .seller-card{
    width:500px;
    position:relative;
    bottom:60px;
    left:450px;
    background:linear-gradient(to right,#cf57ff,#ffb6f3);
    border-radius:20px;
    box-shadow:4px 8px 10px black;
  }
  .INFO{
    font-size:22px;
    margin:20px;
  }
  .seller-card h1{
    text-align:center;
    color:rgb(209, 0, 236);
    font-size:40px;
    text-shadow:0 1px 2px black;
  }
</style>    
</head>


<body id='body'>

<?php
    $SELLER_NAME = $_REQUEST['seller_name'];
    $ITEM_NAME = $_REQUEST['item_name'];
    $connection = mysqli_connect("localhost" , "root" , "" , "seller_and_item")
    or die ("Could't connect to server");
    
    $query = "SELECT * FROM seller_item_info";
    $result = mysqli_query($connection,$query)
    or die("Query failed : " .mysql_error());

    if(mysqli_num_rows($result)>0)
    {
	    while($row = mysqli_fetch_assoc($result))
	    {

            if($SELLER_NAME==$row['Seller_Name'] && $ITEM_NAME==$row['Item_Info'])
            {
                $SELLER_PHONE = $row['Seller_Phone'];
                $SELLER_EMAIL = $row['Seller_Email'];
                $SELLER_ADDRESS = $row['Seller_Address'];
                $ITEM_INFO = $row['Item_Info'];
                $ITEM_PRICE = $row['Item_Price'];
                $ITEM_IMAGE = $row['Item_Image'];          
?>

 <div class="navbar" id="home-nav">
        <nav id="top-nav">
            <a href="../HomePage.html">
                <h1><i>S t A t M A R t</i></h1>
            </a>
        </nav>
  </div>

<div class='seller-card'>
  <h1>SELLER'S DETAILS</h1>
  <label class='INFO' id='SEL_NAME'>NAME: <?php echo $SELLER_NAME?></label><br><br>
  <label class='INFO' id='SEL_EMAIL'>EMAIL: <?php echo $SELLER_EMAIL?></label><br><br>
  <label class='INFO' id='SEL_PHONE'>PHONE: <?php echo $SELLER_PHONE?></label><br><br>
  <label class='INFO' id='SEL_ADD'>LOCATION: <?php echo $SELLER_ADDRESS?></label><br><br>
  <label class='INFO' id='ITEM_NAME'>ITEM NAME: <?php echo  $ITEM_INFO?></label><br><br>
  <label class='INFO' id='ITEM_PRICE'>ITEM PRICE: ₹<?php echo $ITEM_PRICE?></label><br><br>
  <br><br><br>

</div>




<?php
            }
      }
    }
?>
</body>







