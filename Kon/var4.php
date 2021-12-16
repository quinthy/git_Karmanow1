<?php
require_once 'connect.php';
?>
<form action="var4.php" method="GET">
Выберете наличие родословной(<SELECT name = "klichka">
<?php
$result = mysqli_query($link,"SELECT
 sor.rod
FROM sor");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
echo "<option>". ($row['rod']."</option>");
}
?>
</select>
<input type="submit" name="submit" value="Поиск"><br>	
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  sor.rod,
  klichka.klichka
FROM jivotnoe
  INNER JOIN sor
    ON jivotnoe.nal_rodoslovnoi = sor.id_sor
  INNER JOIN klichka
    ON jivotnoe.klichka = klichka.id_klichka
WHERE sor.rod= '$_GET[klichka]'");			
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<h4><caption>'."кличка животного, наличие родословной" . $_GET['priz'] .'</caption></h4>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."кличка животного".'</th>';
echo '<th>'."наличие родословной".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
echo '<tr>';
echo '<td>'.$row['klichka'].'</td>';
echo '<td>'.$row['rod'].'</td>';
echo '</tr>';
}
}
echo '</table>';
?>
<br><input type="submit" value="запрос 1" onclick="location.href='var.php';" /></br>
<br><input type="submit" value="запрос 2" onclick="location.href='var2.php';" /></br>
<br><input type="submit" value="запрос 3" onclick="location.href='var3.php';" /></br>
<br><input type="submit" value="запрос 5" onclick="location.href='var5.php';" /></br>


