<?php 
include dirname(__FILE__).'/SubstitusiHomofon.php'; 

if(isset($_POST['text'])&&isset($_POST['submit']))
$text = $_POST['text']; 

if($_POST['submit']=="Enkripsi"){
        $hasil_text = enkripsi($text);
}
else if($_POST['submit']=='Dekripsi'){        
        $hasil_text = dekripsi($text);
}
else{
$text = null; 
} 

?>

<!DOCTYPE html>
<html lang="en"> 
<link href="style.css" rel="stylesheet" type="text/css"/> 
<title>Substitusi Homofon</title> 
<body> 
<p align="center" style="font-size:28px">Tugas Kriptografi</p> 
<table width="600px" border="0" align="center"> 
<tr> 
        <td> 
<table align="left" border="0"> 
<tr> 
<td>Kelompok</td> 
<td>5</td> 
</tr>  
</table> 
         </td> 
</tr>     
</table> 
<table width="500px" border="1" align="center"> 
<form action="index.php" method="post"> 
<tr><td align="center" height="40px" style="font-size:26px; background-color:#480cee"><span 
style="color:#FFF">Substitusi Homofon</span></td></tr> 
<tr><td align="center"></td></tr> 
<tr><td align="center" style="background-color:#480cee"><span style="color:#FFF"><b>Hasil 
Enkripsi / Dekripsi</b></span></td></tr> 
<tr><td width="300"><textarea style="background-color:#CCC;" readonly="true" rows="5" 
cols="70" > <?php echo $hasil_text;?></textarea></td></tr> 
<tr><td align="center" style="background-color:#480cee"><span 
style="color:#FFF"><b>Tuliskan Plaintext / Chipertext di bawah ini</b></span></td></tr> 
<tr><td width="300"><textarea name="text" rows="5" cols="70" ><?php echo 
$text;?></textarea></td></tr> 
<tr align="center" ><td colspan="2" border="0"><input class="input" type="submit" 
value="Enkripsi" name="submit"/> ||| <input class="input" type="submit" value="Dekripsi" 
name="submit"/></td></tr> 
</form> 
</table> 
<div style="height:10px"></div>
</body> 
</html> 