<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	/*
	* This snippet of code first checks how many post values are coming from if one then definitely it will be from
	* the editor and if two then one is id and other is activate, deactivate or delete. This three conditions are
	* checked using if clause and then we do the database related operations.
	*/
	
	if(count($GLOBALS['_POST'])==1){
		
		$manageUsers->addNewsletter($GLOBALS['_POST']['editor1']);
		header('Location: ../../admin?value=newsletter');
	}
	else if(count($GLOBALS['_POST'])==2){
			$id = $GLOBALS['_POST']['id'];
			
			if(isset($GLOBALS['_POST']['activate'])){
				$manageUsers->activateNewsletters($id);
				header('Location: ../../admin?value=newsletter');
			}
			
			else if(isset($GLOBALS['_POST']['delete'])){
				$manageUsers->deleteNewsletter($id);
				header('Location: ../../admin?value=newsletter');
			}
			
			else if(isset($GLOBALS['_POST']['deactivate'])){
				$manageUsers->deActivateNewsletter($id);
				header('Location: ../../admin?value=newsletter');
			}
			else if(isset($GLOBALS['_POST']['update_id'])){
				$manageUsers->updateNewsletter($GLOBALS['_POST']['editor1'],$GLOBALS['_POST']['update_id']);
				header('Location: ../../admin?value=newsletter');
		}

			
	}
	else if(isset($GLOBALS['_GET']['id'])){
		$str = '<input type="hidden" value="'.$GLOBALS['_GET']['id'].'" name="update_id" />';
		print($str);
		print('<textarea class="ckeditor" id="editor1" name="editor1">');
		$newsletter = $manageUsers->showSinglenewsletter($GLOBALS['_GET']['id']);
		print($newsletter[0]['newsletter']);
		print('</textarea>');
	}


	





?>