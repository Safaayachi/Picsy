<?php
if (isset($_GET['user_id'])) {
  $user_id = $_GET['id'];
  $delete = mysqli_query($conn, "DELETE FROM 'user' WHERE 'user_id'='$user_id'");
}
