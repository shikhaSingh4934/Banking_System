<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
  <style>
    body {
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-image: linear-gradient(rgba(3,6,5,5),rgba(3,6,5,0.5)),url("img/1.jpg");
      }
  </style>
    <title> Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <!---<div class="row intro py-1" style="background-color : #1B79D9;" >-->
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 style="color:#E85A4F; font-family: centurion old; font-size:40px;">Welcome to</h3>
                  <h1 style="color:white;font-family: centurion old; font-size:60px;">MUDRA BANK</h1>
                </div>
              </div>
        </div>
     
        <div class="split left">
        <div class="centeredd">
        <marquee width="100%" direction="up" scrollamount=3; height="100px">
          <h1 style="color: white; font-family: centurion old;font-size:250%;">Welcome to the bank that puts people first.</h1>
        </marquee>
        </div>
      </div>

      <div class="split right">
        <div class="centered">
        <div class="btn">
            <a href="createuser.php"><button style="background-color : #E85A4F;">Create Account</button></a>
            <br>
            <br>
            
            <a href="transfermoney.php"><button style="background-color :#E85A4F;">Make a Transaction</button></a>
            <br>
            <br>
            <a href="transactionhistory.php"><button style="background-color : #E85A4F;">Transaction History</button></a>
          </div>

        </div>
      </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>