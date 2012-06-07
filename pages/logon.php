<?php

if (isset($_POST)) {
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		if ($_POST['logon'] == 'Register') {
			$user = user::insert(array(
				'email' => $_POST['email'],
				'password' => user::hash($_POST['password'])
			));
				
			user::login($_POST['email'], $_POST['password']);
			
			return $smarty->redirect('/start');
		}
		
		user::login($_POST['email'], $_POST['password']);
		
		if (user::logged_in()) {
			return $smarty->redirect('/');
		}
		
		$smarty->assign('logonerror',true);
		$smarty->display('pages/index.tpl');
		
	}
}