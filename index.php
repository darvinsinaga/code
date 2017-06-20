<?php
@$teks=$_POST['teks'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gabung Teks</title>
</head>
<body>
<form method="POST">
	<p align="center"><font face="Times new Roman" size="6"></font></p>
	<p><textarea rows="10" name="teks" cols=" 48"></textarea></p>
	<p><input type="submit" name="" value="Gabung"></p>
	
</form>
<?php
$teks=nl2br($teks) ;
$teks=explode("\r\n",$_POST["teks"]);
$kata=" site:id ";
foreach($teks as $tulisan){
$hasil=$tulisan.$kata;
echo "<br>";
echo $hasil;
}
?>

</body>
</html>