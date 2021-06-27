<!-- 자바스크립트 로그인 유효성검증-->

<?php
	$id = "test@test.com";
	$pw = "1234";
?>

<script>
	function login() {
		// 현재 URL 가져오기
	    const url = location.href; // 현재페이지 경로
	    // get 파라미터 값을 가져올 수 있는 ? 를 기점으로 slice 한 후 split 으로 나눔
	    const parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');

	    let paramsObj = {};

	    // 공백이 +인 경우 decode 하는 법 : https://derveljunit.tistory.com/242
	    for (let i = 0; i < parameters.length; i++) {
	        let paramsName = parameters[i].split('=')[0];
	        let paramsValue = decodeURIComponent(decodeURI(parameters[i].split('=')[1]).replace(/\+/g, " "));
	        paramsObj[paramsName] = paramsValue;
	    }

		if(paramsObj.email != "<?=$id?>") { alert("아이디가 틀렸습니다."); return false; }
		if(paramsObj.password != "<?=$pw?>") { alert("비밀번호가 틀렸습니다."); return false; }
		alert("로그인 성공!");
	}

	login();
</script>


<!-- const : 상수  //  var, let : 변수 -->