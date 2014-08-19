<?php

/* define */
$sqlserver = "localhost";
$sqluser = "root";
$sqlpass = "beast247";
$sqldb = "housing_banks";
$sqltable = "banks";
$font = "<font face='tahoma, verdana, arial' size='2'>";

/* message to display when no banks are found */
$nobanks = "I'm sorry, no Credit Unions were found in $state.&nbsp;&nbsp;";
$directotitle = "Direct Deposit Cash Card&nbsp;&nbsp;";

/* connect */
@mysql_connect($sqlserver,$sqluser,$sqlpass);
echo mysql_error();
@mysql_select_db($sqldb);

?>
