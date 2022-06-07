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
          <li class="nav-item"><a href="#Home" class="nav-link text-white">Home</a></li>
          <li class="nav-item"><a href="./Profile.php" class="nav-link text-white">Profile</a></li>
          <div class="icon" style="margin:5.5px; margin-left: 10px;">
            <li class="nav-item"><a href="./Signin.php" class="bi bi-box-arrow-right text-white "></a></li>
          </div>
        </ul>
      </div>
    </div>
  </div>



  <div class="card-group">
    <div class="container" style="margin-Top:40px; margin-bottom: 20px;">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active text-info" aria-current="page" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="./Home.php">Pictures</a>
        </li>

      </ul>
      <div class="list-group">
        <?php

        $sql = "SELECT * FROM user ORDER BY user_id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
          while ($user = mysqli_fetch_assoc($res)) { ?>

            <a href="#" class="list-group-item list-group-item-action"><?= $user['FirstName'] . ' ' . $user['LastName'] ?></a>

        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>