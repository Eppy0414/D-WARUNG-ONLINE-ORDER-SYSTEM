<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con,$query);
        

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
		    {

			$user_data = mysqli_fetch_assoc($result);
			
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: index.php");
                die;
            }
		    }
        }
        
    
     }
         
    else
    {
        echo " Wrong username or password! ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Log Masuk</title>

</head>
<body>
       <div class="box">
        <div class="container">

    

            <div class="top">
                <span></span>
                <header>Log Masuk</header>
            </div>
            <form method="post">
            <div class="input-field">
                <input id="text" type="text" class="input" placeholder="Username" name="user_name" >
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-field">
                <input id="text" type="password" class="input" placeholder="Password" name="password">
                <i class='bx bx-lock-alt'></i><br><br>
            
            

                <input id="button" type="submit" value="Daftar">
                
                </div>

            <div class="two-col">
                
                <div class="two">
                  <p> <a href="signup.php">Tekan untuk ke Log Masuk</a>.</p>
                </div>
    </form>
            </div>
        </div>
    </div>  
    </body>
</html>