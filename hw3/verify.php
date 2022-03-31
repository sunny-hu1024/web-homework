<?php
	
	#default id and password
	$id = 123;
	$pwd = 123;

	$log_id = $_POST['logid'];
	$log_pw = $_POST['logpwd'];
    $rem = $_POST['remember'];

//	$cookie_on = false;
//	if($rem == "true")
//		$cookie_on = true;
	
	if($log_id==$id && $pwd==$log_pw){
		
		echo "<script> {window.alert('登入成功');location.href='schedule.php'} </script>";
		#if user want to remember his/her data
//		if($cookie_on == true){
//			
//		}
		
	}
	else{
		
		echo "<script> {window.alert('登入失敗');location.href='home.html'} </script>";
	}
	
?>

