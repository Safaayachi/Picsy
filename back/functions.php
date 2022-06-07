<?php
include './db.php';

function emptyInputSignup($FirstName, $LastName, $Email, $Pass, $PassRep)
{
    $result = false;
    if (empty($FirstName) || empty($$LastName) || empty($Email) || empty($Pass) || empty($PassRep)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function passMatch($Pass, $PassRep)
{
    $result = null;
    if ($Pass !== $PassRep) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function UidExists($conn, $Email)
{
    $sql = "SELECT * FROM user WHERE Email = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Signup.php?error=stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $Email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $FirstName, $LastName, $Email, $Pass)
{
    $sql = "INSERT INTO user(FirstName, LastName, Email, Pass) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Signup.php?error=stmtfaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $FirstName, $LastName, $Email, $Pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Signup.php?error=none");
    exit();
}
function loginUser($conn, $username, $Pass)
{
    $uidExists =  UidExists($conn, $username);
    if ($uidExists === false) {
        header("location: ../Signup.php?error=wrongloginn");
        exit();
    }

    $passHashed = $uidExists["Pass"];
    $checkPass = password_verify($Pass, $passHashed);
    if ($checkPass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPass === true) {
        session_start();
        $_SESSION["user_id"] = $uidExists["user_id"];
        $_SESSION["username"] = $uidExists["Email"];
        header("location: ../Home.php");
        exit();
    }
}
function getUsersData($id, $conn)
{

    $query = "select * from user where user_id = '$id' ";
    $result = mysqli_query($conn, $query);
    if ($result) {


        $user_data = mysqli_fetch_assoc($result);
    }
    return $user_data;
}

function DeleteUser($id, $conn)
{
    $sql = "DELETE FROM user WHERE id= $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
