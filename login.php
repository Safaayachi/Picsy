<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="navavbar navbar-expand-lg bg-dark navbar-dark text-white-50">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <div class="span navbar-toggler-icon"></div>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <a href="#" class="navbar-brand">Pic<span class="text-info">sy</span></a>

            </div>
        </div>
    </div>
    <div class="container-md p-5 w-25 " style="background-color: #E1F9FE; margin-Top:40px; border-Radius:10px;">


        <!-- Pills content -->

        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="./back/action_login.php" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="row mb-4">
                        <div style="display:flex; align-items:center; justify-content:center">
                            <button type="submit" name="submit" class="btn btn-info text-white btn-block mb-4">Submit</button>
                        </div>
                        <div class="text-center">
                            <p>Don't have account ? <a href="./Signup.php">Register</a></p>
                        </div>
                </form>
            </div>