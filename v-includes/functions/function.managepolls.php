<?php
	include('../class/class.manageusers.php');
	
	
	 $question = $_POST['question'];
	 $firststAnswer = $_POST['firstanswer'];
	 $secondAnswer =  $_POST['secondanswer'];
	 $thirdAnswer = $_POST['thirdanswer'];
	 $fourthAnswer =  $_POST['fourthanswer'];
	
	$manageusers = new manageusers();
	$count = $manageusers->addPolls($question,$firststAnswer,$secondAnswer,$thirdAnswer,$fourthAnswer);
	
	$count = $manageusers->addvotes($question,$firststAnswer,$secondAnswer,$thirdAnswer,$fourthAnswer);
	
	header('location: ../../admin.php?value=poll');






?>