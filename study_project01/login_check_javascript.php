<!-- �ڹٽ�ũ��Ʈ �α��� ��ȿ������-->

<?php
	$id = "test@test.com";
	$pw = "1234";
?>

<script>
	function login() {
		// ���� URL ��������
	    const url = location.href; // ���������� ���
	    // get �Ķ���� ���� ������ �� �ִ� ? �� �������� slice �� �� split ���� ����
	    const parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');

	    let paramsObj = {};

	    // ������ +�� ��� decode �ϴ� �� : https://derveljunit.tistory.com/242
	    for (let i = 0; i < parameters.length; i++) {
	        let paramsName = parameters[i].split('=')[0];
	        let paramsValue = decodeURIComponent(decodeURI(parameters[i].split('=')[1]).replace(/\+/g, " "));
	        paramsObj[paramsName] = paramsValue;
	    }

		if(paramsObj.email != "<?=$id?>") { alert("���̵� Ʋ�Ƚ��ϴ�."); return false; }
		if(paramsObj.password != "<?=$pw?>") { alert("��й�ȣ�� Ʋ�Ƚ��ϴ�."); return false; }
		alert("�α��� ����!");
	}

	login();
</script>


<!-- const : ���  //  var, let : ���� -->