<?php
  session_start();
  if(!(isset($_SESSION['username'])))
  	{
      header("Location: ../index.html");
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Boricraft Development Dashboard</title>


    

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
                src="../images not uploaded to webserver yet\Discord-Logo-White.png" alt="Discord™ logo"
                style="width: 48px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link navOne" target="_blank" href="https://github.com/Boricraft-Developmont" id="nav2"><img
                src="../images not uploaded to webserver yet\GitHub-Mark-Light-64px.png" alt="Github™ logo"
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
                  <i class="bi bi-cloud-arrow-down-fill"></i>
                <span data-feather="file-text"></span>
                Downloads
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
            <a class="nav-link" href="#">
                <i class="bi bi-box-arrow-right"></i>
              <span data-feather="file-text"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

      </div>
      <?php echo  '<p class="h5">Welcome, ' . $_SESSION["username"] . '</p>'  ?><!-- TODO: Boricraft connect Username Variable to username of login-->
      <img src="https://borisjeletich.nl/cdn/Logo.png" alt="Boricraft Development Logo" style="width: 100px;">
      <br>
      <br>
      <p>With the <b>Boricraft Development Dashboard </b>you can Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Cursus risus at ultrices mi tempus imperdiet nulla. Ut eu sem integer vitae justo eget. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Mauris in aliquam sem fringilla. Sed turpis tincidunt id aliquet risus feugiat in ante metus. Tellus in metus vulputate eu scelerisque. Amet cursus sit amet dictum sit. Tortor posuere ac ut consequat semper viverra nam libero. Blandit turpis cursus in hac. Euismod in pellentesque massa placerat duis. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Tristique senectus et netus et. Scelerisque purus semper eget duis at tellus at. Ante in nibh mauris cursus mattis. Elementum integer enim neque volutpat ac. Sed sed risus pretium quam vulputate. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Maecenas sed enim ut sem viverra aliquet eget sit. Elit pellentesque habitant morbi tristique senectus et netus.</p>
      <p>Tincidunt id aliquet risus feugiat in ante metus dictum!</p>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>
      <div class="iconMenu">
         <a href="https://www.google.com" target="_blank"> <i class="bi bi-house-fill"></i></a>
         <a href="https://www.google.com" target="_blank"><i class="bi bi-shop"></i></a>
         <a href="https://www.google.com" target="_blank"><i class="bi bi-ui-radios"></i></a>
         <a href="https://www.google.com" target="_blank"><i class="bi bi-box-seam"></i></a>
    </div>
    
    </main>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
  </body>
</html>
