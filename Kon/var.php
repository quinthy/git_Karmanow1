<?php
require_once 'connect.php';
?>
<form action="var.php" method="GET">
Приз(1,2,3):<input type="text" name="klichka"><br>
<input type="submit" name="submit" value="Поиск"><br>	
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  trener.fam,
  trener.ima,
  trener.otch,
  klichka.klichka,
  pizo.priz
FROM rod,
     jivotnoe
       INNER JOIN klichka
         ON jivotnoe.klichka = klichka.id_klichka
       INNER JOIN mast
         ON jivotnoe.mast = mast.id_mast
       INNER JOIN pizo
         ON jivotnoe.prizi = pizo.id_prizi
       INNER JOIN sor
         ON jivotnoe.nal_rodoslovnoi = sor.id_sor
       INNER JOIN trener
         ON trener.klichka_jovotnogo = klichka.id_klichka
WHERE pizo.priz = '$_GET[klichka]'");			
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($rows as $row)
{
	print ($row['klichka']."<br>");
	
}
}
?>
<br><input type="submit" value="запрос 2" onclick="location.href='var2.php';" /></br>
<br><input type="submit" value="запрос 3" onclick="location.href='var3.php';" /></br>
<br><input type="submit" value="запрос 4" onclick="location.href='var4.php';" /></br>
<br><input type="submit" value="запрос 5" onclick="location.href='var5.php';" /></br>


