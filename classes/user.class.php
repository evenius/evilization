<?php
class user extends Buzzauth {
	static function hash($pw) {
		return sha1($pw,true);		
	}

	function __toString() {
		return $this->firstname . " " . $this->lastname;
	}
	
	function getOrganization() {
		return organization::select()->where(array('owner_user_id' => $this->id))->one();
	}
}	