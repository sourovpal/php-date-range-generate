<table border="1">
<tr>
    <td>Date</td>
    <td>Day</td>
</tr>
<?php

$startDate = '2024-08-01';

while($startDate <= '2025-06-31'){
    $except = array("Sat", "Sun");
    if(!in_array(date("D", strtotime($startDate)), $except)){
        echo "<tr><td>$startDate</td>";
        echo "<td>".date("D", strtotime($startDate))."</td></tr>";
    }
    $startDate = date("Y-m-d", strtotime("$startDate + 1 day"));
}

?>



</table>