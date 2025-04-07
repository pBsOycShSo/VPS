<?php
$user = $_POST["user"];
$password = $_POST["pas"];
$connect = new mysqli("localhost","root","LakshanSQL","vps", "3306");
$q = "SELECT * FROM user WHERE `username` = '".$user."' AND `password` = '".$password."' AND `status` = 1";
$r = $connect->query($q);
if ($r->num_rows == 1) {
    echo "Done";
}else{
    echo "No";
}
?>
