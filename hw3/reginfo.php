<?php

	//initialize status
	$status = 0;
	//status:0 -> register
	//statue:1 ->login

    $username = $_POST['username'];
	$password = $_POST['pwd'];
	$retype_password = $_POST['repwd'];
    $email = $_POST['email'];
    $tel = $_POST['phnumber'];
    $gender = $_POST['gender'];
    $birthday = $_POST['date'];
	
    //if user type twice pw is different,register again
	if($retype_password!=$password){
		
		echo "<script> {window.alert('兩次輸入密碼不一樣');location.href='regpage.html'} </script>";
	}

	$data = array($username,$password,$email,$tel,$gender,$birthday,$gender); 
	
	//skip to login page
	echo "<script> {window.alert('註冊成功');location.href='home.html'} </script>";
	
?>