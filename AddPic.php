<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>home</title>
</head>

<body>
  <div class="navavbar navbar-expand-lg bg-dark navbar-dark text-white-50">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <div class="span navbar-toggler-icon"></div>
      </button>

      <div class="collapse navbar-collapse" id="mainmenu">
        <a href="./Splash.php" class="navbar-brand">Pic<span class="text-info">sy</span></a>
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
          <a class="nav-link active text-info" aria-current="page" href="#">Add Pictures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="./ManageUsers.php">Manage Users</a>
        </li>

      </ul>

      <form action="./back/upload.php" method="post" enctype="multipart/form-data">

        <input style="padding:20px;" class="form-control" type="text" name="pic_Title" placeholder="Title">

        <textarea style="padding:20px;" class="form-control" name="pic_Description" placeholder="Description" rows="3"></textarea>
        <input style="padding:20px;" class="form-control" type="file" name="file">
        <div style="display:flex; align-items:center; justify-content:center">
          <button type="submit" name="submit" class="btn btn-info text-white btn-block mb-4" style="margin-top: 20px;">Upload</button>
        </div>








      </form>




    </div>
  </div>