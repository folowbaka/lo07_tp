<?php
$date=$_GET["jour"]."/".$_GET["mois"]."/".$_GET["annee"];
$date =date_create_from_format('j/M/Y',"$date");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../include/css/tp02_exo4.css">
    <title>Title</title>
</head>
<body>
<table>
    <tr><th>Date</th><th>Heure</th><th>Salle</th></tr>
    <?php
    echo "<tr><td>$date</td><td>".$_GET["heure"]."</td><td>".$_GET['salle']."</td></tr>";

    ?>
</table>
</body>
</html>
