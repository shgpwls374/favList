<?
 $servername="localhost";
 $username="root";
 $serverpassword="";
 $dbname="Member";
 
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $connect = mysqli_connect($servername, $username, $serverpassword, $dbname);
 
 $query = "SELECT * FROM member WHERE email='$email'";
 $result = mysql_query($connect, $query);
 $data =  mysql_fetch_array($result);
 //$email = $data['email'];
 
 if($data['password'] != $password){
 ?><script>
 	window.alert('로그인에 실패했습니다.');
 	history.back(1);
 </script><?;
 exit;
 }

?>