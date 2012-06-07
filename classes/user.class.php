<?php
class user extends Buzzauth {
	static function hash($pw) {
		return sha1($pw,true);		
	}

	function __toString() {
		return $this->firstname . " " . $this->lastname;
	}
}	