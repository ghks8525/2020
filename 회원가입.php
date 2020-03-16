<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
	  <title>회원가입</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<h1>회원가입</h1>
    <form action="회원가입서버.php";method="GET">
        아이디 : <br><input type="text" name="userid"><br>
        비밀번호 : <br><input type="password" name="userpw">
        <input type="submit" value="회원가입">
    </form>


	</body>
</html>
<?php

?>
