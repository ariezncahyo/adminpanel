<?php
	include('../class/class.manageusers.php');
	session_start();

	$newPassword = $_POST['newPassword'];
	$newPassword1 = $_POST['newPassword1'];
	
	$oldPassword1 = $_POST['oldPassword1'];
	$oldPassword = $_POST['oldPassword'];
	
	if($oldPassword ==  $oldPassword1){
		if($newPassword == $newPassword1){
			$manageUsers = new manageusers();
			$rowCount = $manageUsers->changeAdminPassword($newPassword);
			if($rowCount == 1){
				$_session['result'] = 'true';
				header('location: ../../admin?value=admin');
			}
			else{
				$_session['result'] = 'false';
				header('location: ../../admin?value=admin');
			}
		}
	}
	else if($oldPassword != $oldPassword1){
		$_session['result'] = 'false';
		header('location: ../../admin?value=admin');
	}
	else if($newPassword != $newPassword1){
		$_session['result'] = 'false';
		header('location: ../../admin?value=admin');
	}
	else{
		$_session['result'] = 'false';
		header('location: ../../admin?value=admin');

	}
	


?>