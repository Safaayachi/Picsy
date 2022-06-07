<?php
include('./back/db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Home</title>
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

          <div class="icon" style="margin:5.5px; margin-left: 10px;">
            <li class="nav-item"><a href="./back/logout.php" class="bi bi-box-arrow-right text-white "></a></li>
          </div>
        </ul>
      </div>
    </div>
  </div>



  <div class="card-group">
    <div class="container" style="margin-Top:40px; margin-bottom: 20px;">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active text-info" aria-current="page" href="#">Manage Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="./AddPic.php">Add Pictures</a>
        </li>

      </ul>
      <ul class="list-group list-group-light">

        <?php

        $sql = "SELECT * FROM user ORDER BY user_id DESC";
        $res = mysqli_query($conn, $sql);


        if (mysqli_num_rows($res) > 0) {
          while ($user = mysqli_fetch_assoc($res)) { ?>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <div class="fw-bold"><?= $user['FirstName'] . ' ' . $user['LastName'] ?></div>
              <div class="text-muted"><?= $user['Email'] ?></div>

              <a href='./back/Delete_user.php?id=".$user["user_id"]."' class="badge rounded-pill badge-success btn-danger" style="text-decoration:none;">Delete</a>

            </li>

      </ul>
  <?php
          }
        }
  ?>
    </div>
  </div>