<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body class="">
    
    <div class="container">
        <header>
            <h1>Menu</h1>
            <div class="shopping">
                <img src="image/shopping.svg">
                <span class="quantity">0</span>
            </div>
			<button class="book-a-table-btn scrollto d-none d-lg-flex" onclick="loadPageMethod2()">Order</button>
          <script>
            function loadPageMethod2() {
              window.location.href = "method2.php";
            }
          </script>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Order</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">5</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>