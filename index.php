<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <title>Banking System</title>
</head>
<style>
  .container-fluid h1 {
    color: #4f65d4;
    -webkit-text-stroke: 0.1vh #0d0d0d;
  }
  .container-fluid h2 {
    color: #bb1010;
    -webkit-text-stroke: 0.3vh rgb(143 10 10);
}

  </style>
<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid mt-3">
    <div class="row intro py-5">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h2>Welcome To</h2>
          <h1>BANK OF SPARK</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md slider-div text-center">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block slider" src="img/banking.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block slider" src="img/bank-customer.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block slider" src="img/money.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>

  <br>

  <h3 class="action">Services</h3><br>
  <div class="container px-4">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3 border">
          <div class="col">
            <img src="img/user.jpg" class="img-fluid zoom"><br>
          </div>
          <a href="viewalluser.php" class="btn btn-outline-primary" role="button" data-bs-toggle="button">View User</a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border">
          <div class="col">
            <img src="img/transaction.jpg" class="img-fluid zoom"><br>
          </div>
          <a href="transfermoney.php" class="btn btn-outline-warning" role="button" data-bs-toggle="button">Make a Transaction</a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border">
          <div class="col">
            <img src="img/history.jpg" class="img-fluid zoom"><br>
            <a href="transactionhistory.php" class="btn btn-outline-success" role="button" data-bs-toggle="button">Transaction History</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <br>
  <!-------Footer------>
  <div class="footer">
    <footer>
      <div class="container">
        <p class="copyright">Follow Link</p>
        <div class="text-center">
<p><a href="https://internship.thesparksfoundation.info/">WEB DEVELOPEMENT & DESIGNING INTERN @THE SPARK FOUNDATION </a> </p>
        </div>
        <div class="col item social">
          <a href="#"><i class="icon ion-social-facebook"></i></a>
          <a href="#"><i class="icon ion-social-linkedin"></i></a>
          <a href="#"><i class="icon ion-social-youtube"></i></a>
          <a href="#"><i class="icon ion-social-github"></i></a>
          <a href="#"><i class="icon ion-social-twitter"></i></a>
        </div>
        <p class="copyright"> Designed & Created by <a href="https://www.linkedin.com/in/jay-kumar-0bba2219b" target="_blank">@Jay Kumar</a></p>
      </div>
    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>