<?php
/*
Fabex PHP Framework
First Release: 2021
Author Abdul Fathah Crg

Ziqx Creative Planet 

Database Configuration File
*/


define('FXSERVER', 'localhost');
define('FXUSER', 'u753608608_bolster');
define('FXPASSWORD', 'Bolster@313');
define('FXDB', 'u753608608_bolster');

// Create connection
$fxConn = mysqli_connect(FXSERVER, FXUSER, FXPASSWORD, FXDB);
// Check connection
if (!$fxConn) {
    die('Fabex DB Connection Failed'. mysqli_connect_error());
}


mysqli_set_charset($fxConn,"utf8");

?>
