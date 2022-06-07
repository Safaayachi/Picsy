<?php
include_once './back/Header.php';
?>

<div style="background-color: #E1F9FE; margin-Top:40px; border-Radius:10px;" class="container p-5 w-25">
  <form class="row g-3" action="./back/action.php" method="POST">
    <div class="col-md-6">
      <label class="form-label" for="registerName">FirstName</label>
      <input type="text" id="FirstName" class="form-control" name="FirstName" />

    </div>
    <div class="col-md-6">
      <label class="form-label" for="registerUsername">LastName</label>
      <input type="text" id="LastName" class="form-control" name="LastName" />

    </div>
    <div class="col-12">
      <label class="form-label" for="registerEmail">Email</label>
      <input type="email" id="Email" class="form-control" name="Email" />

    </div>
    <div class="col-12">
      <label class="form-label" for="registerPassword">Password</label>
      <input type="password" id="Password" class="form-control" name="Password" />

    </div>
    <div class="col-md-12">
      <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      <input type="password" id="RepPassword" class="form-control" name="RepPassword" />


    </div>



    <div class="col-12 justify-content-center" style="display:flex; align-items:center; justify-content:center">
      <button type="submit" name="submit" class="btn btn-info text-white btn-block mb-4">Sign up</button>
    </div>
    <div class="text-center">
      <p>already have an account ? <a href="./login.php">Sign in</a></p>
    </div>
  </form>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>