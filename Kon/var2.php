<?php
require_once 'connect.php';
?>
<form action="var2.php" method="GET">
Выберет кличку живтоного:<SELECT name = "klichka">
<?php
$result = mysqli_query($link,"SELECT
  klichka.klichka,
  jivotnoe.prizi
FROM jivotnoe
  INNER JOIN pizo
    ON jivotnoe.prizi = pizo.id_prizi
  INNER JOIN klichka
    ON jivotnoe.klichka = klichka.id_klichka
  INNER JOIN trener
    ON trener.klichka_jovotnogo = klichka.id_klichka");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
echo "<option>". ($row['klichka']."</option>");
}
?>
</select>
<input type="submit" name="submit" value="Поиск"><br>	
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  trener.fam,
  trener.ima,
  trener.otch,
  klichka.klichka
FROM trener
  INNER JOIN klichka
    ON trener.klichka_jovotnogo = klichka.id_klichka
  INNER JOIN jivotnoe
    ON jivotnoe.klichka = klichka.id_klichka
WHERE klichka.klichka = '$_GET[klichka]'");			
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<h4><caption>'."ФИО тренера животного " . $_GET['priz'] .'</caption></h4>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Фамилия".'</th>';
echo '<th>'."имя".'</th>';
echo '<th>'."отчестов".'</th>';
echo '<th>'."кличка животного".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
echo '<tr>';
echo '<td>'.$row['fam'].'</td>';
echo '<td>'.$row['ima'].'</td>';
echo '<td>'.$row['otch'].'</td>';
echo '<td>'.$row['klichka'].'</td>';
echo '</tr>';
}
}
echo '</table>';
?>
<br><input type="submit" value="запрос 1" onclick="location.href='var.php';" /></br>
<br><input type="submit" value="запрос 3" onclick="location.href='var3.php';" /></br>
<br><input type="submit" value="запрос 4" onclick="location.href='var4.php';" /></br>
<br><input type="submit" value="запрос 5" onclick="location.href='var5.php';" /></br>


