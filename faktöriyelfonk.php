<form method='post'>
sayi:<input type="text" name="sayi">   
<input type="submit" name="gonder" value="gonder">
</form>
<?php
function faktoriyel($sayi){
 $fakt=1;
 for($i=1;$i<=$sayi;$i++)
 $fakt=$fakt*$i;
return $fakt;
}
if(isset($_POST['gonder'])){
$sayi=$_POST['sayi'];
$sonuc=faktoriyel($sayi);
echo $sonuc;
}

?>