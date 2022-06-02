<?php require 'baglan.php';

$email = $_POST["email"];
 
$sql = "DELETE FROM uye WHERE uye.email='$email'";
if (mysqli_query($baglan, $sql)) {
      header( 'Location: uyesilform.php');
      
} else {
      echo "Hata: " . $sql . "<br>" . mysqli_error($baglan);
}
mysqli_close($baglan);
?>
