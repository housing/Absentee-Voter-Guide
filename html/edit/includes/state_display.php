<table width=640>
   <tr><td>Complete Absentee Form Online:</td><td><?=format_url($row['input1'])?></td></tr>
   <tr><td colspan=2>*Not all states have online form available - see below if no link is available for your state</td></tr>
   <tr><td>Official State Website where Absentee Ballot Forms are Located:</td><td><?=format_url($row['input2'])?></td></tr>
   <tr><td>Date for start of absentee voting:</td><td><?=$row['input3']?></td></tr>
   <tr><td>Cutoff for Recieving Absentee Ballots:</td><td><?=$row['input4']?></td></tr>
   <tr><td>Is a state approved excuse required:</td><td><?=$row['input5']?></td></tr>
   <tr><td>Is a witness required? :</td><td><?=$row['input6']?></td></tr>
   <tr><td>When are Absentee Ballots counted:</td><td><?=$row['input7']?></td></tr>
   <tr><td>Who normally counts Absentee Ballots:</td><td><?=$row['input9']?></td></tr>
   <tr><td>Notes:</td><td><?=$row['input8']?></td></tr>
</table>
