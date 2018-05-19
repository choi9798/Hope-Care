<?php 
$sum=1;
require_once("func.php");
$search=$_GET['search']."%";
$dbh =con();
$dbh -> query('set names UTF8');
$a = $dbh ->prepare("SELECT * FROM `data` WHERE `topic` like :chinese GROUP BY `topic` ORDER BY `topic` ASC limit 10");
$a->bindparam(':chinese',$search);
$a->execute();
echo "<table width=100% align=left>";
while($row=$a->fetch())
{
echo "<tr>";
echo   "<td id=".$sum." class=search onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\" value=\"".$row['topic']."\">".$row['topic']."</td>";
echo "</tr>";
$sum++;
}
echo "</table>";
$sum--;
echo "<span style=\"display:none;\" id=countednum>".$sum."</span>";
echo "[wht]";

?>