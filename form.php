<?php require 'baglan.php';
require 'navbar.php';
?>

<!DOCTYPE html>

<html lang="tr">
<body>


<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-4 mx-auto">

&nbsp;
<form class="form-horizontal" action="kayit.php" method="POST">

<fieldset>
 <div id="legend">
    <legend class="">Netflix  Üye Ekleme</legend>
 </div>
<div class="form-group">
  <label class="control-label" for="ad">Ad</label>
  <div class="controls">
  <input id="ad" name="ad" type="text" placeholder="Adınızı yazın..." class="form-control input-md" required="">

  </div>
  </div>

<div class="form-group">
  <label class="control-label" for="soyad">Soyad</label>
  <div class="controls">
  <input id="soyad" name="soyad" type="text" placeholder="Soyadınızı yazın..." class="form-control input-md" required="">

  </div>
  </div>

<div class="form-group">
  <label class="control-label" for="email">E-Mail</label>
  <div class="controls">
  <input id="email" name="email" type="text" placeholder="E-Mail adresinizi yazın..." class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
  <label class="control-label" for="sifre">Şifre</label>
  <div class="controls">
  <input id="sifre" name="sifre" type="password" placeholder="Şifrenizi yazın..." class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
  <label class="control-label" for="telefon">Telefon</label>
  <div class="controls">
  <input id="telefon" name="telefon" type="text" placeholder="Telefon numaranızı yazın..." class="form-control input-md" required="">

  </div>
  </div>


<div class="form-group">
  <label class="control-label" for="cinsiyet">Cinsiyet:</label>
  <div class="controls">
    <label class="radio-inline" for="cinsiyet">
      <input type="radio" name="cinsiyet" id="cinsiyet" value="1">
      Erkek
    </label>
    <label class="radio-inline" for="cinsiyet">
      <input type="radio" name="cinsiyet" id="cinsiyet" value="0">
      Kadın
    </label>
  </div>
  </div>

<p class="help-block">Yaş Aralığınız:</p>
 <div class="form-check">

  <input class="form-check-input" type="radio" name="yas" id="radio1" value="1" >
  <label class="form-check-label" for="radio1">
0-7
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="yas" id="radio2" value="2">
  <label class="form-check-label" for="radio2">
7-13
  </label>
</div>
<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="yas" id="radio3" value="3" >
  <label class="form-check-label" for="radio3">
13-18
  </label>
</div>
<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="yas" id="radio4" value="4" >
  <label class="form-check-label" for="radio4">
18-25
  </label>
</div>
<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="yas" id="radio5" value="5" >
  <label class="form-check-label" for="radio5">
25+
  </label>
</div>

&nbsp;

<p class="help-block">Hoşlandığınız Film Türlerini Seçiniz</p>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="1" id="CheckBox1">
    <label class="custom-control-label" for="CheckBox1">Aksiyon</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="2" id="CheckBox2">
    <label class="custom-control-label" for="CheckBox2">Komedi</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="3" id="CheckBox3">
    <label class="custom-control-label" for="CheckBox3">Dram</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="4" id="CheckBox4">
    <label class="custom-control-label" for="CheckBox4">Bilim Kurgu</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="5" id="CheckBox5">
    <label class="custom-control-label" for="CheckBox5">Korku</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="6" id="CheckBox6">
    <label class="custom-control-label" for="CheckBox6">Belgesel</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="7" id="CheckBox7">
    <label class="custom-control-label" for="CheckBox7">Animasyon</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="chkl[ ]" value="8" id="CheckBox8">
    <label class="custom-control-label" for="CheckBox8">Romantik</label>
</div>

&nbsp;

<div class="control-group">

      <div class="controls">
        <button id="submit" class="btn btn-success">Kayıt Ol</button>
      </div>

    </div>

        </div>
    </div>
</div>
&nbsp;
&nbsp;
</fieldset>
</form>


</body>
</html>
