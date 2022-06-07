<?php
error_reporting(0);
session_start();
include('./back/db.php');
include('./back/functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="./css/style.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="navavbar navbar-expand-lg bg-dark navbar-dark text-white-50">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <div class="span navbar-toggler-icon"></div>
      </button>

      <div class="collapse navbar-collapse" id="mainmenu">
        <a href="./Splash.html" class="navbar-brand">Pic<span class="text-info">sy</span></a>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="./Home.php" class="nav-link text-white">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Profile</a></li>
          <li class="nav-item"><a href="./AddPic.php" class="nav-link text-white">Upload</a></li>
          <div class="icon" style="margin:6px; margin-left: 10px;">
            <li class="nav-item"><a href="./back/logout.php" class="bi bi-box-arrow-right text-white "></a></li>

          </div>
        </ul>
      </div>
    </div>
  </div>

  <?php
  if (isset($_SESSION['user_id'])) {
    $idd = $_SESSION['user_id'];
    $usersData = getUsersData($_SESSION['user_id'], $conn);
  ?>

    <div>
      <div class="container-fluid bg-info d-flex align-items-center mb-5 py-5" id="home" style="min-height: 50vh;">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-7 text-center text-lg-left">

              <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;"><?= $usersData['FirstName'] . ' ' . $usersData['LastName'] ?></h1>
              <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>


            </div>

          </div>
        </div>
      </div>




      <div class="container-fluid pt-5" id="service">
        <div class="container">
          <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
            <p class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Pictures</p>

          </div>
          <div class="container">
            <div class="row">
              <?php

              $sql = "SELECT * FROM admin_pics WHERE User_idd='$idd '";
              $res = mysqli_query($conn, $sql);
              if (mysqli_num_rows($res) > 0) {
                while ($pics = mysqli_fetch_assoc($res)) { ?>
                  <div class="col-4" style="margin-bottom:5px; margin-top:50px;">
                    <div class="card">

                      <img src="./back/uploads/<?= $pics['pic_url'] ?>" class="card-img-top" />
                      <div class="card-body">
                        <h5 class="card-title"><?= $pics['pic_Title'] ?></h5>
                        <p class="card-text"><?= $pics['pic_Description'] ?>.</p>
                        <div style="display:flex; align-items:end; justify-content:end">

                          <a href="./back/uploads/<?= $pics['pic_url'] ?>" class="bi bi-arrow-right-circle text-info " style="margin-left: 10px;"></a>

                        </div>
                      </div>
                    </div>
                  </div>

              <?php
                }
              }
              ?>
            </div>
          </div>
        <?php
      }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>