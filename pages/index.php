<?php
if (user::logged_in()) {
			$user = user::get_auth();
			
			if (empty($user->firstname)) {
				return $smarty->redirect('/start');
			}
			
			return $smarty->redirect('/control');
			
}
$smarty->display();