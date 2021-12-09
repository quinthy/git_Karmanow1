<?php
require_once 'connect.php';
?>
<form action="book.php" method="GET">
запрос:<input type="text" name="NameAvtor"><br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if ($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  book.Namebook
FROM book
  INNER JOIN avtor
    ON book.id_avtor = avtor.avtor
  INNER JOIN jang
    ON book.id_janr = jang.id_jang
WHERE avtor.firstName = '$_GET[NameAvtor]'")	;				
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($rows as $row)
{
	print ($row['Namebook']."<br>");
	
}
}
if ($_GET['submit'])
{
	SELECT
  trener.fam,
  trener.ima,
  trener.otch,
  jivotnoe.prizi,
  klichka.klichka
FROM jivotnoe
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
WHERE pizo.priz = 1;				
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($rows as $row)
{
	print ($row['Namebook']."<br>");
	
}
}
?>
