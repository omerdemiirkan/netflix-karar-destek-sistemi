<?php require 'baglan.php';

$ad=strip_tags(trim($_POST["ad"]));
$soyad=strip_tags(trim($_POST["soyad"]));
$email=strip_tags(trim($_POST["email"]));
$telefon=strip_tags(trim($_POST["telefon"]));
$cinsiyet=strip_tags(trim($_POST["cinsiyet"]));
$yas=strip_tags(trim($_POST["yas"]));
$sifre=strip_tags(trim($_POST["sifre"]));
$checkbox1 =$_POST['chkl']; 


if (!$baglan) {
      die("Bağlantı Başarısız: " . mysqli_connect_error());
}


$sql = "INSERT INTO uye (email, ad, soyad,sifre,telefon, cinsiyet) VALUES ('$email','$ad', '$soyad', '$sifre' ,'$telefon','$cinsiyet')";

if (mysqli_query($baglan, $sql)) {
      echo "Üye Başarıyla Kaydedildi";
	header("refresh:1;url=index.php");

for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO uye_tur (email,tur_no) VALUES ('$email','".$checkbox1[$i]. "')";
mysqli_query($baglan, $query) or die(mysql_error());
}  



 
$query="INSERT INTO uye_yas (email,yas_no) VALUES ('$email','$yas')";
mysqli_query($baglan, $query) or die(mysql_error());  



for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO yas_tur (yas_no,tur_no) VALUES ('$yas','".$checkbox1[$i]. "')";
mysqli_query($baglan, $query) or die(mysql_error());  
}  



for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO yas_tur (yas_no,tur_no) VALUES ('$yas','".$checkbox1[$i]. "')";
mysqli_query($baglan, $query) or die(mysql_error());  
}  



} else {
      echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
}
mysqli_close($baglan);
?>
