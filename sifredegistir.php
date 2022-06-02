<?php require 'baglan.php';

$email2 = $_POST["sifreemail"];
$yenisifre = $_POST["yenisifre"];

$sql = "UPDATE uye SET uye.sifre='$yenisifre' WHERE uye.email='$email2'";
if (mysqli_query($baglan, $sql)) {
      header( 'Location: uyesilform.php');

} else {
      echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
}
mysqli_close($baglan);
?>
