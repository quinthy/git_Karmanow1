<?php
require_once 'connect.php';
?>
<form action="var.php" method="GET">
Выберете призовое место(от 1 до 3)(<SELECT name = "klichka">
<?php
$result = mysqli_query($link,"SELECT
  pizo.id_prizi
FROM pizo");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
echo "<option>". ($row['id_prizi']."</option>");
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
  jivotnoe.prizi,
  trener.fam,
  trener.ima,
  trener.otch
FROM jivotnoe
  INNER JOIN pizo
    ON jivotnoe.prizi = pizo.id_prizi
  INNER JOIN klichka
    ON jivotnoe.klichka = klichka.id_klichka
  INNER JOIN trener
    ON trener.klichka_jovotnogo = klichka.id_klichka
WHERE jivotnoe.prizi = '$_GET[klichka]'");			
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<h4><caption>'."ФИО тренера, кличка животного, призовое место " . $_GET['priz'] .'</caption></h4>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Фамилия".'</th>';
echo '<th>'."имя".'</th>';
echo '<th>'."отчестов".'</th>';
echo '<th>'."кличка животного".'</th>';
echo '<th>'."призовое место".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
echo '<tr>';
echo '<td>'.$row['fam'].'</td>';
echo '<td>'.$row['ima'].'</td>';
echo '<td>'.$row['otch'].'</td>';
echo '<td>'.$row['klichka'].'</td>';
echo '<td>'.$row['prizi'].'</td>';
echo '</tr>';
}
}
echo '</table>';
?>
<br><input type="submit" value="запрос 2" onclick="location.href='var2.php';" /></br>
<br><input type="submit" value="запрос 3" onclick="location.href='var3.php';" /></br>
<br><input type="submit" value="запрос 4" onclick="location.href='var4.php';" /></br>
<br><input type="submit" value="запрос 5" onclick="location.href='var5.php';" /></br>


