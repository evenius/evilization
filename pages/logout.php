<?php 
if (user::logged_in()) {
	user::logout();
}

return $smarty->redirect('/');
