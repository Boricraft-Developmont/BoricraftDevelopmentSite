
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Products | Boricraft Development Dashboard</title>


    

    <!-- Bootstrap core CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://borisjeletich.nl/cdn/bamihaplogo.ico" type="image/gif" sizes="64x64">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../subpages/subcss/dashboard.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="index.js"></script>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4fc2e8" id="topnavbar">
      <a href="#home"><img src="https://borisjeletich.nl/cdn/Logo.png" alt="Our logo" width="80" height="84"></a>
      <a class="navbar-brand mb-0 h1" href="#home">Boricraft Development</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
        </li>
          <li class="nav-item">
            <a class="nav-link navOne" target="_blank" href="https://discord.gg/uWhcQxnvJt" id="nav2"><img
                src="../images not uploaded to webserver yet\Discord-Logo-White.png" alt="Discord??? logo"
                style="width: 48px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link navOne" target="_blank" href="https://github.com/Boricraft-Developmont" id="nav2"><img
                src="../images not uploaded to webserver yet\GitHub-Mark-Light-64px.png" alt="Github??? logo"
                style="width: 39px; margin-top: 2px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link navOne" href="subpages\login.php" id="nav2"><i class="bi bi-person-fill"
                style="font-size: 2rem; color: white;"></i></a>
          </li>
        </ul>
      </div>
    </nav>


    <!-- Favicons -->



    <style>

    </style>

  </head>
  <body>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              <i class="bi bi-house-fill"></i> Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-shop"></i>
              <span data-feather="file"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-ui-radios"></i>
              <span data-feather="shopping-cart"></span>
              
              Plugins
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-box-seam"></i>
              <span data-feather="users"></span>
              Modpacks
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> -->
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved</span>
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class="bi bi-receipt-cutoff"></i>
                <span data-feather="file-text"></span>
                Purchased
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bookmarks-fill"></i>
                  <span data-feather="file-text"></span>
                  Bookmarks
                </a>
              </li>
            </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Account</span>
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear-fill"></i>
              <span data-feather="file-text"></span>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
              <span data-feather="file-text"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
    

    <div class="col-md-6 col-lg-4">
        <div class="card my-3">
            <div class="card-thumbnail">
                <img src="https://media.discordapp.net/attachments/532217354168303648/821338193093459988/Logo.png" class="img-fluid" alt="thumbnail">
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="#" class="text-secondary">VIP rank</a></h3>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card my-3">
            <div class="card-thumbnail">
                <img src="https://media.discordapp.net/attachments/532217354168303648/821338193093459988/Logo.png" class="img-fluid" alt="thumbnail">
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="#" class="text-secondary">VIP+ rank</a></h3>
                <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card my-3">
            <div class="card-thumbnail">
                <img src="https://media.discordapp.net/attachments/532217354168303648/821338193093459988/Logo.png" class="img-fluid" alt="thumbnail">
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="#" class="text-secondary">MVP</a></h3>
                <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card my-3">
            <div class="card-thumbnail">
                <img src="https://media.discordapp.net/attachments/532217354168303648/821338193093459988/Logo.png" class="img-fluid" alt="thumbnail">
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="#" class="text-secondary">MVP+</a></h3>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card my-3">
            <div class="card-thumbnail">
                <img src="https://media.discordapp.net/attachments/532217354168303648/821338193093459988/Logo.png" class="img-fluid" alt="thumbnail">
            </div>
            <div class="card-body">
                <h3 class="card-title"><a href="#" class="text-secondary">MVP++</a></h3>
                <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
        </div>
    </div>
</div>
</div>