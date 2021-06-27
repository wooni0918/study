<?php
	$id = "test@test.com";
	$pw = "1234";
?>

<script>
	function login(){
		const URLSearch = new URLSearchParams(location.search); // 객체 생성
		var email = URLSearch.get('email');
		var password = URLSearch.get('password');

		if(email != "<?=$id?>") { 
			alert("아이디가 틀렸습니다."); 
			history.go(-1); // 한페이지 앞으로 이동
			return false; 
		}
		if(password != "<?=$pw?>") { 
			alert("비밀번호가 틀렸습니다.");
			history.go(-1);
			return false; 
		}
		alert("로그인 성공!");
		location.href = "main.html"; // 현재경로를 main.html로 바꾸라는 의미 => 페이지 이동이 일어난다.
	}

	login();
</script>


<!-- 참고사이트 :  
	
	https://webisfree.com/2019-07-26/%EC%9E%90%EB%B0%94%EC%8A%A4%ED%81%AC%EB%A6%BD%ED%8A%B8%EC%97%90%EC%84%9C-url-%EC%BF%BC%EB%A6%AC%EC%8A%A4%ED%8A%B8%EB%A7%81(query-string)-%EC%89%BD%EA%B2%8C-%EA%B0%80%EC%A0%B8%EC%98%A4%EB%8A%94-%EB%B0%A9%EB%B2%95

-->