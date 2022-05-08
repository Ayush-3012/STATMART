<?php

    $EMAIL = $_REQUEST['input_email'];
    $PASSWORD = $_REQUEST['input_password'];

    $connection = mysqli_connect("localhost","root","","statmart")
    or die ("Coudn't connect to the server");   

    $query = "SELECT * FROM userinfo";
    $result = mysqli_query($connection,$query)
    or die("QUERY failed :" .mysql_error());

    $flag=0;

    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($EMAIL==$row['Email'] && $PASSWORD===$row['Password'])
            {
               
                echo "<script>window.open('HomePage.html','_self');</script>";
                $flag=$flag+1;
                exit;
            }
        }
        if($flag==0) 
        {
            echo "<script>alert('Invalid Username or Password');
            window.open('index.html','_self');
            </script>";
        }
    }
    else 
    {
        echo "<script>alert('Invalid Username or Password');
        window.open('index.html','_self');
        </script>";
    }
    
   
?>