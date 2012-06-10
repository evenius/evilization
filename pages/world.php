<?php

if (isset($parts[1])){
	if ($parts[1] == 'join') {
		if (isset($parts[2])){
			org_missioned::insert(array(
				user::get_auth()->getorganization(),
				'mission_id' => $parts[2]
			));
			
		return $smarty->redirect('/world');
		}
	}
}

$mis = new mission();

$smarty->assign('availableMission',$mis->getAvailable());
$smarty->display();
