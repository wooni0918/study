<!-- php 로그인 유효성검증-->
<?
	$email	= "test@test.com";
	$pass	= "1234";

	if($_REQUEST['email'] != $email) {
		echo "<script>alert('이메일이 틀렸습니다.');</script>";
		exit;
	}
	if($_REQUEST['password'] != $pass) {
		die("<script>alert('비밀번호가 틀렸습니다.');</script>"); // echo ~ exit 와 die는 동일
	}
?>
<script>
	alert("로그인 성공!");
</script>