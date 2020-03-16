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

$checkid=false; //id중복검사
$sql="SELECT userid FROM login WHERE userid = '{$id}'";
$result=$dbConnect->query($sql);
if($result)
{
  $cnt=$result->num_rows;
  if($cnt==0)
  {
    $checkid=true;
  }
  else
  {
    echo "이미 존재하는 아이디입니다.".'<br>';
    echo "<a href='./회원가입.php'>뒤로돌아가기</a>";
    exit;
  }
}

if($pw == NULL || $pw == "") //비밀번호 검사
{
  echo "비밀번호를 입력해주세요".'<br>';
  echo "<a href='./회원가입.php'>뒤로돌아가기</a>";
  return;
}

if($checkid==true)
{
  $sql="INSERT INTO login(userid,userpw) VALUES('{$id}','{$pw}')";
  $result=$dbConnect->query($sql);
  if($result)
  {
    echo "회원가입성공".'<br>';
    echo "<a href='./로그인.php'>로그인창으로 이동</a>";
  }
  else
  {
    echo "회원가입실패".'<br>';
    echo "<a href='./회원가입.php'>다시 시도해주세요</a>";
  }
}
 ?>
