<?php
require(dirname(__FILE__).'/config/config.new.php');
add_log_history('', 'LOGOUT', $session->get('uid'), $session->get('userrole') );
$_SESSION['uid'] = '';
$_SESSION['username'] = '';
$_SESSION['userrole'] = '';
header("Location: index.php");
exit;
?>
