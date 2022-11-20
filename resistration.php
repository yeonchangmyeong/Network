<?php
shell_exec("./Logindbcreate.sh");
$con=mysqli_connect("localhost","root","12345678","login");
if (mysqli_connect_errno($con)){


  echo "<font style=\"colo r:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
}
$id = $_POST['id'];
$pw = $_POST['pw'];
$q = "INSERT INTO users( users, password ) VALUES ( '$id', '$pw' )";

$con->query($q);

$con->close();

echo "<script>location.href='register_ok.html';</script>";
?>
