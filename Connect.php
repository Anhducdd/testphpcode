<?php
$errors = array();
$conn_string="host=ec2-34-197-141-7.compute-1.amazonaws.com
 port=5432 dbname=db7lrj93isfe3h user=hlphipxlcbjlwm password=ea2f7fd249414dbe1e27433c83057cc931dd53a782295ac070c40d29e9d8a94f";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['password'])) {
	# code...
	$pass = $_POST['password'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	array_push($errors, "Wrong username/password combination");
}
?>
