<?php ?>
<!DOCTYPE >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Netflix Karar Destek Sistemi</title>
</head>
<body>
  <div class="container table-bordered border-info" id="cont">
    <div class="text-center"><img src="sinema\ress.jpg" class="img-rounded" alt="netflix" style="margin-top:15px; margin-bottom:10px; width:700px; height:205px;"></div><br />
    <h1 class="text-center " style="font-family: Arial Black; font-size:80px; margin-bottom: 20px; color: #b82d17!important;">Netflix Karar Destek Sistemi</h1
    <?php


        echo "kullanıcı adı şifre hatali";

      ?>
      <div class="row table-bordered">
        <form action="foto.php" method="post">
          <div class="col-md-12  p-2" style="margin-left:380px;color: #b82d17!important;  "><b   >Kullanıcı Adı:</b> <input name="id" style="margin-left:20px;" type="text" /></div>
          <div class="col-md-12 p-2" style="margin-left:380px;color:#b82d17!important;" ><b>Şifre:</b> <input name="sifre" type="password" style="margin-left:78px;" type="text" /></div>
            <div class="col-md-12" style="margin-left:616px;">
              <input name="girisbuton" type="submit" class="btn btn-outline-info" value="Giriş" style="margin-bottom:1px;color:#b82d17!important;"  > </div>


        </form>


      </div>
      <form action="uye_ol.php" method="post">
          <input name="kayitbuton" type="submit" class="btn btn-outline-info" value="Üye Ol"  style="margin-left:680px; margin-top:-55px;  color:#b82d17!important;" type="text" >
      </form>

</body>
</html>