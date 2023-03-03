<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <title>Home</title>
</head>

<body>
  <!--Navigation Bar Start-->
  <nav class="navbar navbar-expand navbar-dark fixed-top" aria-label="Second navbar example">
    <div class="container">
      <a class="navbar-brand " href="index.html">Warung Hati</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02"
        aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--End of Navbar-->
  <!--Slideshow start-->
  <div id="bestofall" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-slide">
        <img class="img-carousel c-img"
          src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
          class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item c-slide">
        <img class="img-carousel c-img"
          src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
          class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item c-slide">
        <img class="img-carousel c-img"
          src="https://images.unsplash.com/photo-1577303935007-0d306ee638cf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=840&q=80"
          class="d-block w-100" alt="...">
      </div>
      <div class="caption carousel-caption position-absolute top-50 start-10 translate-middle-y text-start">
        <h1 class="">Lorem Ipsum</h1>
        <h5 class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt animi at debitis temporibus perspiciatis
          dicta odit velit beatae quis corporis asperiores corrupti dolorum, veniam vero? Deserunt, adipisci
          consequatur. Deleniti, accusamus!</h5>
      </div>
    </div>
  </div>
  <!--End of Slideshow-->
  <!--Content-->
  <div class="px-4 py-5 my-3 text-center">
    <h1 class="display-5 fw-bold">Who are we?</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero commodi velit quo placeat similique dolorem qui natus, iure architecto itaque dicta sint atque tempora impedit. Architecto labore quae blanditiis error!</p>
    </div>
  </div>
  <?php include('footer.php') ?>