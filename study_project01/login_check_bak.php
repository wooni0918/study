<!-- php �α��� ��ȿ������-->
<?
	$email	= "test@test.com";
	$pass	= "1234";

	if($_REQUEST['email'] != $email) {
		echo "<script>alert('�̸����� Ʋ�Ƚ��ϴ�.');</script>";
		exit;
	}
	if($_REQUEST['password'] != $pass) {
		die("<script>alert('��й�ȣ�� Ʋ�Ƚ��ϴ�.');</script>"); // echo ~ exit �� die�� ����
	}
?>
<script>
	alert("�α��� ����!");
</script>