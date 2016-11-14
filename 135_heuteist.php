<html lang="de">
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
  
<h1>Array: Heute ist:</h1>

<?php  
$tag[0] = "Sonntag";
$tag[1] = "Montag";
$tag[2] = "Dienstag";
$tag[3] = "Mittoch";
$tag[4] = "Donnerstag";
$tag[5] = "Freitag";
$tag[6] = "Samstag";

$monat[0] = "Januar";
$monat[1] = "Februar";
$monat[2] = "März";
$monat[3] = "April";
$monat[4] = "Mai";
$monat[5] = "Juni";
$monat[6] = "Juli";
$monat[7] = "August";
$monat[8] = "September";
$monat[9] = "Oktober";
$monat[10] = "November";
$monat[11] = "Dezember";

$jahr[0] = "2006";
$jahr[1] = "2007";
$jahr[2] = "2008";
$jahr[3] = "2009";
$jahr[4] = "2010";
$jahr[5] = "2011";
$jahr[6] = "2012";

$tagnummer = date('w'); //Tag ermitteln
echo "Heute ist " . $tag[4] . $monat[2] . $jahr[3]; 
?>

</html>
