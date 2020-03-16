<?php
session_start();
$host = 'localhost';
$user = 'root';
$pw = '1234';
$dbName = 'user';
$dbConnect = new mysqli($host,$user,$pw,$dbName);
$dbConnect->set_charset("utf8");

if(mysqli_connect_errno()){
  echo '데이터베이스 접속 실패';
}

 $id=$_GET["userid"];
 $pw=$_GET["userpw"];

 $sql="SELECT userid,userpw FROM login WHERE userid='{$id}' AND userpw='{$pw}'";
 $result = $dbConnect->query($sql);
 if($result)
 {
   if($result->num_rows == 0)
   {
     echo "<h1>로그인 실패</h1>";
     echo "<a href='./로그인.php'>돌아가기</a>";
   }
   else {
     echo "<h1>로그인 성공</h1>";
   }
 }
 ?>
