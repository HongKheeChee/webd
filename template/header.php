<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <style>
div.a {
  font-size: 15px;
}

div.b {
  font-size: large;
}

div.c {
  font-size: 15px;
}
</style>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="c"><a style="color:white; font-size:20px;" class="navbar-brand" href="admin.php">Admin Login</a></div>
            
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
              <li><div class=""><a style="color:white;font-size:15px;" href="index.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Main Page</a></div></li>
              <!-- link to publiser_list.php -->
              <li><div class=""><a style="color:white;font-size:15px;"href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></div></li>
              <!-- link to books.php -->
              <li><div class=""><a style="color:white;font-size:15px;" href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></div></li>
              <!-- link to contacts.php -->
              <li><div class=""><a style="color:white;font-size:15px;"href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Feedback</a></div></li>
              <!-- link to shopping cart -->
              <li><div class=""><a style="color:white; font-size:15px;"href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></div></li>
              
              <li><div class=""><a style="color:white; font-size:15px;"href="newEmptyPHP.php"><span class=""></span>&nbsp; Register</a></div></li>
              
              <li><div class=""><a style="color:white; font-size:15px;"href="onlineread.php"><span class=""></span>&nbsp; Online reading</a></div></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class="container mt-3">
  <h2>Welcome to Online Bookstore</h2>
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Welcome to Online Bookstore</h1> 
    <p>We provide variety of books here</p> 
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">