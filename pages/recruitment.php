<?php

$rec = new recruit();
$available = $rec->getAvailable();


$smarty->assign('availableRecruit', $available);
$smarty->display();