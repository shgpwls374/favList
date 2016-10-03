<!DOCTYPE HTML>
<html>
<head>
	<title>favList</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<? include ('./header.php'); ?>
	<div class="Container">
		<form action="register_post.php" method="POST">
			<h1>회원가입&nbsp;</h1><small>Register</small>
			
			<label for="email"><br>이메일</label>
			<input name="email" type="text" placeholder="address@sample.com" autofocus required>

			<label for="name"><br>이름</label>
			<input name="name" type="text" placeholder="name" required>

			<label for="password"><br>비밀번호</label>
			<input name="password" type="password" placeholder="password" required>
			
			<button type="submit" class="submit" class="left">가입</button>
			<button type="reset" class="right">다시입력</button>
		</form>
		<br><br>이미 회원이신가요?&nbsp;<a href="login.php"><b>로그인</b></a>
	</div>
	<? include ('./footer.php'); ?>
</body>
</html>