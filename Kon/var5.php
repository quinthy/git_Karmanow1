<?php
require_once'connect.php';
?>

<form action="var5.php" method="GET">
Введите призовое место(1,2,3):<input type="text" name="Namepizo"><br>
<br><input type="submit" name="submit" value="Добавить"></br>
</form>

<?php
if($_GET['submit'])
{
$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO pizo(id_prizi,priz)
VALUES (0,'$_GET[Namepizo]')");
}
?>

<input type="submit" name="submit" value="удалить"><br>
<?php
if($_GET['submit'])
{
$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO pizo(id_prizi,priz)
VALUES (0,'$_GET[Namepizo]')");
}
?>

<br><input type="submit" value="запрос 1" onclick="location.href='var.php';" /></br>
<br><input type="submit" value="запрос 2" onclick="location.href='var2.php';" /></br>	
<br><input type="submit" value="запрос 3" onclick="location.href='var3.php';" /></br>
<br><input type="submit" value="запрос 4" onclick="location.href='var4.php';" /></br>

