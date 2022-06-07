
<?php
require_once './db.php';
require_once './functions.php';

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pass     = $_POST["password"];
    session_start();
    $query = "select * from user where Email = '$username' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);

            if ($pass == $user_data['Pass']) {
                $_SESSION['user_id'] = $user_data['user_id'];
                if ($user_data['is_admin'] == 1) {
                    header("Location: ../Dashboard.php");
                } else {

                    header("Location: ../Home.php");
                }
            }
        }
    }
} else {
    header("Location: ./login.php");
}
