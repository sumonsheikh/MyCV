<?php

include('../control/config.php');

$sql="SELECT *FROM personal_info";
$result=mysqli_query($myconn,$sql);

if ($result->num_rows > 0) {
  
    while($row=$result->fetch_assoc()){
    	echo"<center><strong>Curriculam Vita Of : ". $row["name"]."</strong></center><br><br>";
    	echo "<center><table>
    				<tr>
    					<td>id:</td><td>".$row["emid"]."</td>
    					
    				</tr>
    				<tr><td>Name:</td><td>".$row["name"]."</td></tr>
    				<tr><td>Address:</td><td>".$row["address"]."</td></tr>
    				<tr><td>Mobile:</td><td>".$row["mobile"]."</td></tr>
    				<tr><td>Email:</td><td>".$row["email"]."</td></tr>
    				<tr><td ><strong>Accademic Information</strong></td></tr>
					<tr><td ><strong>Bachelor of Science</strong></td></tr>
					<tr><td>Subject:</td><td>".$row["subject"]."</td></tr>
					<tr><td>University:</td><td>".$row["university"]."</td></tr>
					<tr><td>Session:</td><td>".$row["session"]."</td></tr>
					<tr><td>Result:</td><td>".$row["result"]."</td></tr>
					<tr><td ><strong>Higher Secondary Certificate</strong></td></tr>	
					<tr><td>Group:</td><td>".$row["hsc_group"]."</td></tr>
					<tr><td>Passing Year:</td><td>".$row["hsc_passing_year"]."</td></tr>
					<tr><td>Result:</td><td>".$row["hsc_result"]."</td></tr>
					<tr><td>Session:</td><td>".$row["hsc_session"]."</td></tr>
					<tr><td>College:</td><td>".$row["hsc_college"]."</td></tr>
					<tr><td>Board:</td><td>".$row["hsc_board"]."</td></tr>
					<tr><td ><strong>Secondary School Certificate</strong></td></tr>	
					<tr><td>Group:</td><td>".$row["ssc_group"]."</td></tr>
					<tr><td>Passing Year:</td><td>".$row["ssc_passing_year"]."</td></tr>
					<tr><td>Result:</td><td>".$row["ssc_result"]."</td></tr>
					
					<tr><td>College:</td><td>".$row["ssc_school"]."</td></tr>
					<tr><td>Board:</td><td>".$row["ssc_board"]."</td></tr>


    		</center></table>";
    }
} else {
    echo "0 results";
}
$myconn->close();
?>