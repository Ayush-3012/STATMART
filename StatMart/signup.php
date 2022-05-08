<!DOCTYPE html>

<html>

<?php 

    $EMAIL = $_REQUEST['user_email'];
    $USERNAME = $_REQUEST['user_name'];
    $PASSWORD = $_REQUEST['user_password'];

    $connection = $connection = mysqli_connect("localhost","root","","statmart")
    or die ("Coudn't connect to the server");   

    $flag=0;

    $query2 = "SELECT * FROM userinfo";
    $result2 = mysqli_query($connection,$query2)
    or die("QUERY failed :" .mysqli_error());

    if(mysqli_num_rows($result2)>0)
    {
        while($row = mysqli_fetch_assoc($result2))
        {   
            if($EMAIL==$row['Email'])
            {
                echo "<script>alert('Email already exist');
                window.open('index.html','_self');
                </script>";
                $flag=$flag+1;
                break;
            }

        }
        if($flag==0)
        {
            echo "<script>alert('Sign Up Successful!');
            window.open('index.html','_self');
            </script>";
            $query = "INSERT INTO userinfo(Email,Username,Password) VALUES('$EMAIL','$USERNAME','$PASSWORD')";
            $result = mysqli_query($connection,$query)
            or die("QUERY failed :" .mysqli_error());
        }
    }
    else 
    {    
        echo "<script>alert('Sign Up Successful!');
        window.open('index.html','_self');
        </script>";
        $query = "INSERT INTO userinfo(Email,Username,Password) VALUES('$EMAIL','$USERNAME','$PASSWORD')";
        $result = mysqli_query($connection,$query)
        or die("QUERY failed :" .mysqli_error());
    }

    //header("Location:index.html");
    //exit;

?>

<head></head>

<body>
</body>
</html>