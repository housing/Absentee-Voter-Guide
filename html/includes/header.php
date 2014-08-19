<?php

/* define */
$sqlserver = "localhost";
$sqluser = "absentee";
$sqlpass = "beast247";
$sqldb = "absenteevotersguide_com";
$sqltable = "absentees";
$font = "<font face='tahoma, verdana, arial' size='2'>";

/* connect */
@mysql_connect($sqlserver,$sqluser,$sqlpass);
@mysql_select_db($sqldb);
$edit = 0 // flag - allows editing - set to zero to make readonly/active

?>
