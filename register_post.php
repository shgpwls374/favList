<?php
 $servername="localhost";
 $username="root";
 $serverpassword="";
 $dbname="Member";

 $email=$_POST['email'];
 $name=$_POST['name'];
 $password=$_POST['password'];

 $connect = mysqli_connect($servername, $username, $serverpassword, $dbname);

 $query = "INSERT INTO member (email, name, password)
 VALUES ('$email', '$name', '$password')";

 if (mysqli_query($connect, $query)) {
	?><script>
	window.alert('가입이 완료되었습니다.');
	history.back(1);
	</script><?;
	exit;
 } else {
 	echo "Error : ". $query. "<br>". mysqli_error($connect);
 }

 mysqli_close($connect);
?>