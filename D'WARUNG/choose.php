<?php
    session_start();

        include("connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            //something was posted
            $total = $_POST['total'];
            $table_num = $_POST['table_num'];
            

            if(!empty($total) && !empty($table_num))
            {
                //save to database
                $user_id = random_num(20);
                $query = "insert into new_order (user_id,total,table_num) values ('$user_id','$total','$table_num')";
                
                mysqli_query($con, $query);

                header("location: confirm.php");
                die;
            
            }
            
            else
            {
                echo " Please enter some valid information! ";
            }
        }

    ?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Bayaran Online</title>

</head>
<body>
       <div class="box">
        <div class="container">

    

            <div class="top">
                <span></span>
                <header>Bayaran Online</header>
            </div>
            <form method="post">
            <div class="input-field">
                
                <input id="text" type="text" class="input" placeholder="Bayaran" name="total" ><br><br>
                <input id="text" type="text" class="input" placeholder="Nom Meja" name="table_num"><br><br>
                
                <button value="Daftar" id="button"type="submit">Bayar</button>
                <script>
                    function loadPageNoBank() {
                      window.location.href = ".php";
                    }
                  </script>
                
                
                </div>
   
    </form>
            </div>
        </div>
    </div>  
    </body>
</html>
