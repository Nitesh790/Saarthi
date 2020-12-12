<html>
<body>
<div style="display: block; border: 1px solid black;">
<?php  
echo '<table>'.
        '<tr>'.
          '<th>'."NAME".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Employee ID".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Department".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Email id ".str_repeat('&nbsp;', 5).'</th>'.
          '<th>'."Date of Joining".str_repeat('&nbsp;', 5).'</th>'.
        '</tr>'.
        
        '<tr>'.
          '<td>'.$_GET["name"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["empid"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["dept"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["email"].str_repeat('&nbsp;', 5).'</td>'.
          '<td>'.$_GET["DOJ"].str_repeat('&nbsp;', 5).'</td>'.
        '</tr>'.

'</table>';
?>
</div>
</body>
</html>