<?php
header("content-type: text");
$host = "db"; //hostname db from docker-compose file
$username = "root"; // use root user
$pw = "somepass";

$conn = new mysqli($host,$username,$pw);

if($conn->connect_errno > 0) {
	echo $db->connect_error;
} else {
	echo "db connection successful\n\n";
    
	//we read out the content
	/*$result=mysqli_query($conn,"SHOW DATABASES;");
	while( $row = mysqli_fetch_row( $result ) ){
		echo $row[0]."\n";
    }*/

}