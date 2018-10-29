<?php
include('config.php');
$stdinfo="CREATE TABLE IF NOT EXISTS personal_info1(emid INT(11) NOT NULL,
name VARCHAR(50) NOT NULL,

address VARCHAR(50) NOT NULL,
mobile VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
hsc_group VARCHAR(10) NOT NULL,
PRIMARY KEY(emid) 
)";
$result=mysqli_query($myconn,$stdinfo);
if($result===TRUE)
{
	echo"Employee info table created";
}
else
{
		echo"Employee info table not created";

}

?>
