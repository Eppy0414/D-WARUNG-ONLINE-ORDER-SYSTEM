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
                //save to database
                $user_id = random_num(20);
                $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
                
                mysqli_query($con, $query);

                header("location: login.php");
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

        <title>Daftar</title>

    </head>
    <body>
       <div class="box">
        <div class="container">

    

            <div class="top">
                <span></span>
                <header>Daftar</header>
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
                  <p> <a href="login.php">Tekan untuk ke Log Masuk</a>.</p>
                </div>
    </form>
            </div>
        </div>
    </div>  
    </body>
    </html>