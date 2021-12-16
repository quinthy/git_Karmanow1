<?php
require_once 'connect.php';
?>
<form action="var3.php" method="GET">
Выберет цвет живтоного:<SELECT name = "mast">
<?php
$result = mysqli_query($link,"SELECT
 mast.cvet
FROM mast");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
echo "<option>". ($row['cvet']."</option>");
}
?>
</select>
<input type="submit" name="submit" value="Поиск"><br>	
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  klichka.klichka,
  mast.cvet
FROM klichka
  INNER JOIN mast
    ON klichka.cvet = mast.id_mast
WHERE mast.cvet = '$_GET[mast]'");			
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<h4><caption>'."Цвет животного, кличка животного " . $_GET['priz'] .'</caption></h4>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."цвет животного".'</th>';
echo '<th>'."кличка животного".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
echo '<tr>';
echo '<td>'.$row['cvet'].'</td>';
echo '<td>'.$row['klichka'].'</td>';
echo '</tr>';
}
}
echo '</table>';
?>
<br><input type="submit" value="запрос 1" onclick="location.href='var.php';" /></br>
<br><input type="submit" value="запрос 2" onclick="location.href='var2.php';" /></br>
<br><input type="submit" value="запрос 4" onclick="location.href='var4.php';" /></br>
<br><input type="submit" value="запрос 5" onclick="location.href='var5.php';" /></br>


