<?php

$mis = new mission();

foreach ($mis->getAvailable() as $m){
	echo $m->name;
}
