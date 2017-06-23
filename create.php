
<style>
textarea {
  width: 50%;
  height: 50%;
}
body {
	font-family: Iceland;
color: #aaaaaa;
text-decoration:none; 
background: radial-gradient(#008000, #000000);
}
a:hover {
text-decoration:none; 
color:red;
}
a {
text-decoration:none;
color:#aaaaaa;
} 
</style>
<?php
//** Fathur.xZ Shortlink **/
error_reporting(0);
if(file_put_contents(".htaccess", base64_decode("UmV3cml0ZUVuZ2luZSBPbg0KUmV3cml0ZUNvbmQgJXtSRVFVRVNUX0ZJTEVOQU1FfSAhLWYNClJld3JpdGVSdWxlIF4oW14uXSspJCAkMS5waHAgW05DLExd"))){
$s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
error_reporting(0);
$url2 = '");
save("<font color=lime>$ip</font> <font color=red>$nama_negara</font> <font color=yellow>$ua</font><br>\n");
?>';
$url = $_POST['link'];
$ok = $_POST['OK'];
$c = $_SERVER['PHP_SELF'];
$file = $_SERVER['SCRIPT_FILENAME'];
$edit= $_POST['edit'];
$host  = str_replace($file, '', $c);
$filename = $s;
if($edit != "" && $edit != "index"){
$filename = $edit;
}
$vis = $filename."_visitor.php";
$urlasli = $filename."url.txt";
$counturl = $filename."count.txt";
$url1 = 'error_reporting(0);
$ip = $_SERVER["REMOTE_ADDR"];
$ua = $_SERVER["HTTP_USER_AGENT"];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip.""));
$negara = $details->geoplugin_countryCode;
$nama_negara = $details->geoplugin_countryName;
$kode_negara = strtolower($negara);
function save($data){
		$fp = @fopen("'.$counturl.'", "a") or die("cant open file");
		fwrite($fp, $data);
		fclose($fp);
}
header("Location: ';
$vv = 'error_reporting(0);
$g =  file_get_contents("'.$urlasli.'");
$count = count(file("'.$counturl.'"));
echo "target url : <b><font color=red>$g</b></font><br>";
echo "filename : <b><font color=red>'.$filename.'</b></font><br>";
echo "total klik : <b><font color=red>$count</b></font><br>";
echo "<hr><b><font color=red>Detail Yang Klik</b></font><br><br>";
echo file_get_contents("'.$counturl.'");
?>';
$urlr = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/".$filename;
$urlv = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/".$filename."_visitor";
$visitor = "<style>
textarea {
  width: 50%;
  height: 50%;
}
body {
	font-family: Iceland;
color: #aaaaaa;
text-decoration:none; 
background: radial-gradient(#008000, #000000);
}
a:hover {
text-decoration:none; 
color:red;
}
a {
text-decoration:none;
color:#aaaaaa;
} 
</style><?php \n".$vv;
$jep = "<?php \n".$url1.$url.$url2;
if($ok == "SUBMIT"){
	error_reporting(0);
if(file_put_contents($filename.".php", $jep)){
	error_reporting(0);
file_put_contents($vis, $visitor);
file_put_contents($urlasli, $url);
echo "success<br>
Check your Visitor <a href='$urlv' target='_new'>click here</a><br>
your redirect url : <a href='$urlr' target='_new'>$urlr</a><hr>";
} else {
	echo "gagal membuat redirect";
}
} else {
}
} else {
	echo "error htaccess";
}
?>
<body>
<form action="" method="POST">
<table border="0">
<tr>
<td>
<label>Custom Link / Edit Link : </label>
</td>
<td>
<input type="text" name="edit" placeholder="enter your link name" value="">
</td>
</tr>
<tr>
<td>
<label>Your URL : </label>
</td>
<td>
<input type="text" name="link" placeholder="http://site.com/">
</td>
</tr>
<tr>
<td>
<input type="submit" name="OK" value="SUBMIT">
</td>
</tr>
</table>
<font color="red"><b>*Note : isi Kolom Custom link jika ingin custom link / Edit link dengan file redirect anda sebelumnya jika ingin di ganti urlnya !</b></font>
</form>