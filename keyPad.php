<style>
    table, td{
        border: 1px solid red;
        text-align: center;
    }
    table{
        border-collapse: collapse;
        width: 100px;
        height: 100px;
        margin-left: 50%;
    }
</style>
<?php
$arr =array(1,2,3,4,5,6,7,8,9);
shuffle($arr);
$num =0;
?>
<html>
<table >
    <?php
    for($i=1; $i<=3; $i++){
        echo "<tr>";
        for($j=1; $j<=3; $j++){
            echo "<td>$arr[$num]</td>";
            $num++;
        }
        echo "<br>";
    }
    ?>
    </tr>
    <tr><form><td colspan="3"><input type="submit" value="Refresh"></form></td></tr>
</table>
</html>
