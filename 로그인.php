<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
	  <title>로그인</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<h1>로그인</h1>
    <form action="로그인 서버.php"; method="GET">
        아이디 : <br><input type="text" name="userid"><br>
        비밀번호 : <br><input type="password" name="userpw">
        <input type="submit" value="로그인">
    </form>
    <a href="회원가입.php"><button type="button">회원가입</button></a>

	</body>
</html>
