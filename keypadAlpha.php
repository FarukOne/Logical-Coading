<style>
    table, td{
        border: 1px solid #ff0000;
        text-align: center;
    }
    table{
        border-collapse: collapse;
        width: 400px;
        height: 40vh;
        margin-left: 40%;
    }
</style>
<?php
$arr =[
    [1],
    [2,'A','B','C'],
    [3,'D','E','F'],
    [4,'G','H','I'],
    [5,'J','K','L'],
    [6,'M','N','O'],
    [7,'P','Q','R','S'],
    [8,'T','U','V'],
    [9,'W','X','Y','Z']
];
shuffle($arr);
$num =0;
?>
<html>
<table >
    <?php
//   foreach ($arr as $val){
//       foreach ($val as $value){
//           echo $value." ";
//       }
//   }
    for($i=1; $i<=3; $i++){
        echo "<tr>";
        for($j=1; $j<=3; $j++){
            echo "<td>";
            for($k=0; $k<count($arr[$num]); $k++){
                $string = $arr[$num][$k];
                if(! is_string($string)){
                    echo "<span style='font-size: 25px;'>$string</span><br>";
                }else{
                    echo "<span style='font-size: 10px;'>$string</span>";
                }
            }
            echo "</td>";
            $num++;
        }
        echo "<br>";
    }
    ?>
    </tr>
    <tr>
        <td style='font-size: 25px;'>#</td>
        <td style='font-size: 25px;'>0</td>
        <td style='font-size: 25px;'>*</td>
    </tr>
    <tr><form><td colspan="3"><input type="submit" value="Refresh"></form></td></tr>
</table>
</html>
