<?php

$sql = "DELETE FROM phpro_bedrijf WHERE id= " . $id ;

$link = '';
echo "<div class='container'>";
echo "<h1>item deleted<h1></h1>";
echo "<br>";

echo "<a id='back' href='index.php?action=admin'>index page</a>";
echo "<br>";
echo "<br>";
echo "</div>";
$mysqli->query($sql);