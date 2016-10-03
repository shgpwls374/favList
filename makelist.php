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
		<form action="makelist_post.php" method="POST">
		<h1>리스트 만들기&nbsp;</h1><small>New List</small>
			<label for="l-name"><br>리스트 제목</label>
			<input type="text" name="l-name" placeholder="list name">

			<label for="l-exp"><br>리스트 설명</label>
			<input type="text" name="l-exp" placeholder="list explanation">

			<div class="ml-input">
				<div class="ml-text">
					<label for="m-name" class="font-small"><br>음악 제목</label>
					<input type="text" name="m-name" placeholder="music name" required>

					<label for="m-artist" class="font-small"><br>아티스트</label>
					<input type="text" name="m-artist" placeholder="artist">

					<label for="m-link" class="font-small"><br>음악 링크</label>
					<input type="url" name="m-link" placeholder="music url">

					<label for="m-exp" class="font-small"><br>음악 설명</label>
					<input type="text" name="m-exp" placeholder="music explanation">
				</div>

				<div class="ml-pic">
					<label for="m-pic"  class="font-small"><br>앨범아트</label>
					<input type="file" name="m-pic" id="ml-pic-input">
					<img src="" id="ml-pic-added">
				</div>
			</div>

			<button type="" class="left">음악 추가</button>
			<button type="submit" class="right">리스트 만들기</button>
		</form>
	</div>
	<? include ('./footer.php'); ?>
</body>
</html>