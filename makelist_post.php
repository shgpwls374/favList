<?php
 $servername="localhost";
 $username="root";
 $serverpassword="";
 $dbname="List";

 $lname=$_POST['l-name'];
 $lexp=$_POST['l-exp'];
 $mname=$_POST['m-name'];
 $martist=$_POST['m-artist'];
 $murl=$_POST['m-link'];
 $mexp=$_POST['m-exp'];

 $connect = mysqli_connect($servername, $username, $serverpassword, $dbname);
 
 $sql = "CREATE TABLE $lname (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 mname VARCHAR(50) NOT NULL,
 martist VARCHAR(50) NOT NULL,
 murl VARCHAR(100) NOT NULL,
 mexp VARCHAR(100) NOT NULL,
 reg_date TIMESTAMP
 )";
 
 if (mysqli_query($connect, $sql)) {

 	$query = "INSERT INTO $lname (mname, martist, murl, mexp) VALUES ('$mname', '$martist', '$murl', '$mexp')";
	mysqli_query($connect, $query);

 	?><script>
	window.alert('리스트가 작성되었습니다.');
	history.back(1);
	</script><?;
	
	exit;
 } else {
 	echo "Error creating table : " . mysqli_error($connect) ."<br>";
 }



 mysqli_close($connect);
 ?>