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
		<form action="login_post.php" method="POST">
			<h1>로그인&nbsp;</h1><small>Log in</small>

			<label for="email"><br>이메일</label>
			<input name="email" type="text" placeholder="sample@address.com" autofocus required>

			<label for="password"><br>비밀번호</label>
			<input name="password" type="password" placeholder="password" required>
			
			<button type="submit" class="submit" class="left">로그인</button>
			<button type="reset" class="right">다시입력</button>
		</form>
		<br><br>회원이 아니신가요?&nbsp;<a href="register.php"><b>회원가입</b></a>
	</div>
	<? include ('./footer.php'); ?>
</body>
</html>