<?php
include('../control/config.php');
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$university=$_POST['university'];
$session=$_POST['session'];
$result=$_POST['result'];
$subject=$_POST['subject'];
$hsc_group=$_POST['hsc_group'];
$hsc_passing_year=$_POST['hsc_passing_year'];
$hsc_session=$_POST['hsc_session'];
$hsc_college=$_POST['hsc_college'];
$hsc_result=$_POST['hsc_result'];
$hsc_board=$_POST['hsc_board'];
$ssc_group=$_POST['ssc_group'];
$ssc_passing_year=$_POST['ssc_passing_year'];
$ssc_school=$_POST['ssc_school'];
$ssc_board=$_POST['ssc_board'];
$ssc_result=$_POST['ssc_result'];

//$sql="INSERT INTO `personal_info1` (`emid`, `name`, `address`, `mobile`, `email`,`hsc_group`) VALUES (NULL, '$name', '$address', '$mobile', '$email','$hsc_group')";
$sql="INSERT INTO `personal_info` (`emid`, `name`, `address`, `mobile`, `email`, `subject`, `university`, `session`, `result`, `hsc_group`, `hsc_passing_year`, `hsc_result`, `hsc_session`, `hsc_college`, `hsc_board`, `ssc_group`, `ssc_passing_year`, `ssc_result`, `ssc_school`, `ssc_board`) VALUES ('', '$name', '$address', '$mobile', '$email', '$subject', '$university', '$session', '$result', '$hsc_group', '$hsc_passing_year', '$hsc_result', '$hsc_session', '$hsc_college', '$hsc_board', '$ssc_group', '$ssc_passing_year', '$ssc_result', '$ssc_school', '$ssc_board')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo("user information added sucessfull");
}
else
{
	echo("user information added unsucessfull");

}
header("Location:addDetails.php");
?>