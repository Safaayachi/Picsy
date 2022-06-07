$query = "select * from user where Email = '$username' ";
$result = mysqli_query($conn, $query);
if ($result) {
if ($result && mysqli_num_rows($result) > 0) {

$user_data = mysqli_fetch_assoc($result);

if ($user_data['pass'] === $pass) {

$_SESSION['user_id'] = $user_data['user_id'];
header("Location: index.php");
die;
}
}
}











$sql = "SELECT user_id, Email, Pass FROM user WHERE Email = ?";
if ($stmt = mysqli_prepare($conn, $sql)) {
mysqli_stmt_bind_param($stmt, "s", $param_username);
$param_username = $username;
if (mysqli_stmt_execute($stmt)) {
mysqli_stmt_store_result($stmt);
if (mysqli_stmt_num_rows($stmt) == 1) {
mysqli_stmt_bind_result($stmt, $user_id, $username, $hashed_password);
if (mysqli_stmt_fetch($stmt)) {
if (password_verify($pass, $hashed_password)) {
session_start();
$_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION["username"] = $username;
header("location: ../Home.php");
}
}
}
}