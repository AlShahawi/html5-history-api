<?php
$isAjaxRequest = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

function loadIfNotAjax($fileName) {
	global $isAjaxRequest;
	if(!$isAjaxRequest) include_once "$fileName.php";
}
