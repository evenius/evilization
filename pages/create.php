<?php

if (user::logged_in()) {
	if (isset($_POST)){
		if(
			!empty($_POST['firstname']) &&
			!empty($_POST['lastname']) &&
			!empty($_POST['gender']) &&
			!empty($_POST['alias']) &&
			!empty($_POST['organization'])
		){
			$user = user::get_auth();
			
			$user->firstname = $_POST['firstname'];
			$user->lastname = $_POST['lastname'];
			$user->gender = $_POST['gender'];
			$user->alias = $_POST['alias'];
			
			organization::insert(array(
				'owner_user_id' => $user->id,
				'name' => $_POST['organization'] 
			));

		}
	}
}

return $smarty->redirect('/');
