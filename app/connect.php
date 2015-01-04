<?php
$_hostname	= "localhost";
$_username 	= "root";
$_password 	= "123456";
$_dbname 	= "php_xml";
$_connect 	= mysql_connect($_hostname, $_username, $_password);
mysql_select_db($_dbname, $_connect);