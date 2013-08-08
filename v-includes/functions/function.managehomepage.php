<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	if(isset($GLOBALS['_POST']['firstbox'])){
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['firstbox'],$GLOBALS['_POST']['headline1'],$GLOBALS['_POST']['content'],$GLOBALS['_POST']['firstline'],$GLOBALS['_POST']['secondline'],$GLOBALS['_POST']['thirdline'],$GLOBALS['_POST']['fourthline'],$GLOBALS['_POST']['fifthline']);
		
		header('Location: ../../admin?value=homepage');
		
	}
	else if(isset($GLOBALS['_POST']['secondbox'])){
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['secondbox'],$GLOBALS['_POST']['headline1'],$GLOBALS['_POST']['content'],$GLOBALS['_POST']['firstline'],$GLOBALS['_POST']['secondline'],$GLOBALS['_POST']['thirdline'],$GLOBALS['_POST']['fourthline'],$GLOBALS['_POST']['fifthline']);
		
		header('Location: ../../admin?value=homepage');
		
	}
	
	else if(isset($GLOBALS['_POST']['thirdbox'])){
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['thirdbox'],$GLOBALS['_POST']['editor1'],'','','','','','');
		
		header('Location: ../../admin?value=homepage');
	}

	
?>