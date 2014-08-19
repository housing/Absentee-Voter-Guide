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
$edit = 1 // flag - allows editing - set to zero to make readonly/active

?>
<html>
<head>
<title>Absentee Voter Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css">
<script language="javascript">
self.focus();
</script>
