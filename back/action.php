<?php
if (isset($_POST["submit"])) {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $Pass = $_POST["Password"];
    $PassRep = $_POST["RepPassword"];


    require_once './db.php';
    require_once './functions.php';
    //if (emptyInputSignup($FirstName, $LastName, $Email, $Pass, $PassRep) !== false) {

    // header("location: ../Signup.php?error=emptyinput");
    //  exit();
    //}

    if (passMatch($Pass, $PassRep) !== false) {
        header("location: ../Signup.php?error=passwordsdontmatch");
        exit();
    }
    if (UidExists($conn, $Email) !== false) {
        header("location: ../Signup.php?error=emailExists");
        exit();
    }

    createUser($conn, $FirstName, $LastName, $Email, $Pass);
    header("location: ../login.php");
    exit();
} else {
    header("location: ../Signup.php");
    exit();
}
