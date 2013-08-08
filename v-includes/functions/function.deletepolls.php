<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$id = $_POST['id'];
	$activate = $_POST['activate'];
	$delete = $_POST['delete'];
	
	if(isset($activate))
		$manageUsers->activatePoll($id);
	else if(isset($delete))
		$deleted = $manageUsers->deletePoll($id);


	header('location: ../../admin.php?value=poll');
	


?>