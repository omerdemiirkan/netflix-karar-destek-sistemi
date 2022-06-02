<?php require 'baglan.php'; ?>

<?php

if(isset($_POST["id"])){
    $sql = 'SELECT * FROM uye WHERE email="'.$_POST['id'].'" AND sifre="'.$_POST['sifre'].'"';


$databasedenDonenSonuc = $baglan->query($sql);

if ($databasedenDonenSonuc->num_rows > 0) { ?>


<?php require 'navbar.php';

?>

<div class="container table-bordered border-info" id="cont">
    <div class="text-center"><img src="sinema\ress.jpg" class="img" alt="netflix" style="margin-top:30px; width:850px; height:300px;"></div><br />
    <h1 class="text-center " style="font-family:'Sitka Subheading'; color:#b82d17!important; font-size:100px; margin-bottom:auto;">Netflix Karar Destek Sistemi</h1

        <?php
        } else {

    header("Refresh: 4; url= http://localhost:81/sinema/index.php");
    die( "Kullanıcı Adınız veya Şifreniz Yanlış Tekrar Yönlendiriliyorsunuz Lütfen Bekleyiniz..");
        }
}else{
    require 'navbar.php';
?>
    <div class="container table-bordered border-info" id="cont">
        <div class="text-center"><img src="sinema\ress.jpg" class="img-rounded" alt="netflix" style="margin-top:30px; width:850px; height:300px;"></div><br />
        <h1 class="text-center text-info" style="font-family:'Sitka Subheading'; color:#b82d17!important; font-size:100px; margin-bottom:auto;">Netflix Karar Destek Sistemi</h1

<?php
            }
        ?>



