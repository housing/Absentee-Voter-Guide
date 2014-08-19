<?php
/* connect to db */
include("includes/header.php");
include("./includes/script.html");
include("./includes/header.html");

$font2 = "<font face='tahoma' size='1'>";

/* select db */
@mysql_select_db($sqldb);
/* display a bank's details */
if ($edit) {
  if ($_REQUEST['process']) {
    $query = "select * from $sqltable where state = '".$_REQUEST['state']."'";
    $res = mysql_query($query);
    if ($res && mysql_num_rows($res)) {
      // update
      $query = "UPDATE $sqltable 
                 set input1 = '".$_REQUEST['input1']."',
                  input2 = '".$_REQUEST['input2']."',
                 input3 = '".$_REQUEST['input3']."',
                 input4 = '".$_REQUEST['input4']."',
                 input5 = '".$_REQUEST['input5']."', 
                 input6 = '".$_REQUEST['input6']."', 
                 input7 = '".$_REQUEST['input7']."', 
                 input8 = '".$_REQUEST['input8']."', 
                 input9 = '".$_REQUEST['input9']."' 
                 where state = '".$_REQUEST['state']."'";
    } else {
      // insert 
      $query = "insert into $sqltable (state, input1, input2, input3, input4, input5, input6,input7, input8, input9) 
	values ('".$_REQUEST['state']."',
                '".$_REQUEST['input1']."',
                '".$_REQUEST['input2']."',
                '".$_REQUEST['input3']."',
                '".$_REQUEST['input4']."',
                '".$_REQUEST['input5']."',
                '".$_REQUEST['input6']."',
                '".$_REQUEST['input7']."',
                '".$_REQUEST['input8']."',
                '".$_REQUEST['input9']."'
)";
    }
    mysql_query($query);
    display_state($_REQUEST['state']);
  } else {
    // get info if it exists
    $query = "select * from $sqltable where state = '".$_REQUEST['state']."'";
    $res = mysql_query($query);
    if ($res) {
      $row = mysql_fetch_array($res);
    }
$label = array();
$label[0] = "Complete Absentee form online URL:";
$label[1] = "Official State Website where Absentee Ballot Forms are Located:";
$label[2] = "Date for start of absentee voting";
$label[3] = "Cutoff for Recieving Absentee Ballots";
$label[4] = "Is a state approved excuse required";
$label[5] = "Is a witness required?";
$label[6] = "When are Absentee Ballots counted";
$label[7] = "Notes";
$label[8] = "Who normally counts Absentee Ballots";

    ?>
    <h2>Input items for State <?=$_REQUEST['state']?></h2>
      <br>
    <form action="<?=$PHPSELF?>" method=POST>
       <? for ($i = 0; $i < 9; $i++) { 
			if ($i == 7) {
			?><h4><?=$label[$i]?></h4><textarea rows=4 cols=60 name=input<?=($i+1)?>><?=$row['input'.($i+1)]?></textarea><?
			} elseif ($i == 4 || $i == 5) {
			?><h4><?=$label[$i]?></h4><select name=input<?=($i+1)?>><?=yesno($row['input'.($i+1)])?></select><?	
			} else  {
			?><h4><?=$label[$i]?></h4><input type=text size=60 name=input<?=($i+1)?> value="<?=$row['input'.($i+1)]?>"><?
			}
	 } 
?>
<br><br>      <input type=submit value="Enter info">
	 <input type=hidden name=process value=1>
	 <input type=hidden name=state value="<?=$_REQUEST['state']?>">
	 </form>
<?
	 }
} else {
  display_state($_REQUEST['state']);
}
function display_state($state) {
  global $sqltable;

  $query = "select * from $sqltable where state = '$state'";
  $res = mysql_query($query);
  $row = @mysql_fetch_array($res, MYSQL_ASSOC);
  include("includes/state_display.php");

}
function format_url($in, $label='') {
	if (strlen($in)) {
		$in = preg_replace("#http:\/\/#i", '', $in);
		if ($label == '') { 
			$label = "http://".$in;
		}
		
		return('<a href="http://'.$in.'">'.$label.'</a>');
	} else {
		return('');
	}
}



function yesno ($input) {
	if ($input != 'No') {
	$string = '<option value="Yes" SELECTED>Yes</option><option value="No">No</option>';
	} else {
	$string = '<option value="Yes">Yes</option><option value="No" SELECTED>No</option>';
	}
	return($string);
}
include("includes/foot.html");

?>
