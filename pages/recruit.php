<?php
if (isset($parts[1])){
	if ($parts[1] == 'add') {
		if (isset($parts[2])){
			org_recruited::insert(array(
				user::get_auth()->getorganization(),
				'recruit_id' => $parts[2]
			));
			
		return $smarty->redirect('/recruit');
		}
	}
}
