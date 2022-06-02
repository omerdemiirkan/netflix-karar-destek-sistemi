<?php require 'baglan.php';
require 'navbar.php';
?>

<!DOCTYPE html>
<html lang="tr">

<div class="container h-100"> </div>
    <div class="row align-items-center h-100">
        <div class="col-4 mx-auto">

<form class="form-horizontal" action="uyesil.php" method="POST">
<fieldset>
 <div id="legend">
    <legend >Üye Kaydı Silme Formu</legend>
 </div>
<div class="form-group">
  <label class="control-label" for="email"></label>  
  <div class="controls">
  <input id="email" name="email" type="e-mail" placeholder="Silinecek Hesabın E-Mail Adresi" class="form-control input-md">
    
  </div>
  </div>

<div class="control-group">

      <div class="controls">
        <button id="submit1" class="btn btn-success">Sil</button>
      </div>
    </div>
      <script>
      var submit=document.getElementById("submit1");
      submit.onclick=function(){
      window.alert("Üye Başarıyla Silindi!"); }
      </script>
 </fieldset>
 </form>

&nbsp;
&nbsp;
<form class="form-horizontal" action="sifredegistir.php" method="POST">
<fieldset>
 <div id="legend">
    <legend class=""> Şifre Güncelleme</legend>
 </div>
<div class="form-group">
  <label class="control-label" for="sifreemail"></label>  
  <div class="controls">
  <input id="sifreemail" name="sifreemail" type="e-mail" placeholder="E-Mail Adresi" class="form-control input-md" >
    
  </div>
  <div class="form-group">
  <label class="control-label" for="yenisifre"></label>  
  <div class="controls">
  <input id="yenisifre" name="yenisifre" type="password" placeholder="Yeni Şifreyi Yazınız" class="form-control input-md">
    
  </div>
  </div>

<div class="control-group">
      <div class="controls">
        <button id="submit2" class="btn btn-success">Şifre Değiştir</button>
      </div>
    </div>
      <script>
      var submit=document.getElementById("submit2");
      submit.onclick=function(){
      window.alert("Şifre Başarıyla Güncellendi!"); }
      </script>
        </div>
    </div>
</div>
 </fieldset>
 </form>


</body>
</html>
