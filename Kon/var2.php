<?php
require_once 'connect.php';
?>
<form action="var.php" method="GET">
Приз:<input type="text" name="klichka"><br>
<input type="submit" name="submit" value="Поиск"><br>	
</form>
<input type="submit" value="назад" onclick="location.href='var.php';" />