<?php

require_once("config.php");
$_SESSION = array();
session_destroy();
header('Location: index.php');
exit;

?>