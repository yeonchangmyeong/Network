<?php
include "config.php";
ini_set('display_errors', '1');
$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $_POST['user']); //인젝션 방지
$mypassword = mysqli_real_escape_string($con, $_POST['pass']);

$sql_query = "select users from users where users='".$myusername."' and password='".$mypassword."'";

$result = mysqli_query($con,$sql_query);
$count = mysqli_num_rows($result);

var_dump($result);	
var_dump($myusername);
var_dump($mypassword);

var_dump($_POST['user']);
var_dump($_POST['pass']);
var_dump($sql_query);

if ($count == true)
{
	$var = shell_exec("./cp.sh");
	shell_exec("./capturedbcreate.sh");
	shell_exec("./tcpdbcreate.sh");
	shell_exec("./udpdbcreate.sh");
	shell_exec("./icmpdbcreate.sh");
	shell_exec("./testdbcreate.sh");
    	header("Location:selection.html");
}
else {
    echo "데이터 베이스에 등록된 ID 또는 PASSWORD 잘못 입력했습니다 .";
}

/*
$file = fopen("capture2.txt","r") or die("Unable to open file!");
if(NULL != $file){
fscanf($file, "%s",$tcp);
fscanf($file, "%s",$udp);
fscanf($file, "%s",$icmp);
$insert_query = "insert into capture (tcp,udp,icmp) values ('$tcp','$udp','$icmp')";
$insert_result = mysqli_query($capcon,$insert_query);
}
 */
/*
	$sql ="load data infile 'var/www/localhost/nmt/capture2.txt' into table 'capture'
	fields terminated by ' '
	ignore 0 lines"
	("eth","srcaddr","dstaddr");

if(mysqli_query($capcon, $sql))    echo "LOAD DATA INFILE successfully"; 
	else    
	echo "Error LOAD DATA INFILE:".mysqli_error($capcon); 
 
 */

	/*
$file = fopen("user.txt","r") or die("Unable to open file!");
fscanf($file, "%s",$users);
fscanf($file, "%s",$password);

$insert_query = "insert into users (users,password) values ('$users','$password')";
$insert_result = mysqli_query($con,$insert_query);
 파일 읽어서 db에 저장하는 소스*/
?>
