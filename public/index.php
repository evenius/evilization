<?php

/* Set the locale */
setlocale(LC_ALL, array('sv_SE.UTF-8', 'sv_SE'));
setlocale(LC_NUMERIC, array('en_US.UTF-8', 'en_US'));

/* Start the session */
session_start();

/* Is ajax? */
function isAjax() {
    return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
}

/* CDN */
function cdn($url) {
	return "//cdn." . $_SERVER['HTTP_HOST'] . "/" . $url;
}

/* Requirements */
require_once (dirname(__FILE__) . '/../lib/Buzzmix/require.php');

/* Create the Buzzmix */
$site = new Buzzmix(dirname(__FILE__) . '/..');

/* Set header and footer */
if(!isAjax()) {
    $site->setHeader('header.tpl');
    $site->setFooter('footer.tpl');
}
/* Setup the MySQL Database */
$site->mysqlSetup("localhost", "evenius", "masvil", "ez");

/* Check if user is logged in */
$site->mysqlConnect();
$site->assign('pageUser', user::get_auth());

/* Display it! */
$status = $site->handleRequest($_SERVER['REQUEST_URI']);

