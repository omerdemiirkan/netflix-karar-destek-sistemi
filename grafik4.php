<?php require 'baglan.php';
require 'navbar.php';


 $sql = "SELECT (SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=1 AND uye.cinsiyet=1) AS erkekaksiyon, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=1 AND uye.cinsiyet=0) AS kadinaksiyon, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=2 AND uye.cinsiyet=1) AS erkekkomedi, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=2 AND uye.cinsiyet=0) AS kadinkomedi, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=3 AND uye.cinsiyet=1) AS erkekdram, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=3 AND uye.cinsiyet=0) AS kadindram, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=4 AND uye.cinsiyet=1) AS erkekbilim, 
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=4 AND uye.cinsiyet=0) AS kadinbilim,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=5 AND uye.cinsiyet=1) AS erkekkorku,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=5 AND uye.cinsiyet=0) AS kadinkorku,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=6 AND uye.cinsiyet=1) AS erkekbelge,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=6 AND uye.cinsiyet=0) AS kadinbelge,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=7 AND uye.cinsiyet=1) AS erkekanima,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=7 AND uye.cinsiyet=0) AS kadinanima,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=8 AND uye.cinsiyet=1) AS erkekroman,
(SELECT COUNT(uye_tur.email) FROM uye,uye_tur,tur WHERE uye_tur.tur_no=tur.tur_no AND uye_tur.email=uye.email AND uye_tur.tur_no=8 AND uye.cinsiyet=0) AS kadinroman";



    $sonuc = $baglan->query($sql);
	
	if ($sonuc->num_rows > 0) {

        while($row = $sonuc->fetch_assoc()) {
            
			$a = $row["erkekaksiyon"];
            $b = $row["kadinaksiyon"];
            $c = $row["erkekkomedi"];
            $d = $row["kadinkomedi"];
            $e = $row["erkekdram"];
            $f = $row["kadindram"];
            $g = $row["erkekbilim"];
            $h = $row["kadinbilim"];
            $j = $row["erkekkorku"];
            $k = $row["kadinkorku"];
            $l = $row["erkekbelge"];
            $m = $row["kadinbelge"];
            $n = $row["erkekanima"];
            $o = $row["kadinanima"];
            $p = $row["erkekroman"];
            $r = $row["kadinroman"];

            
            
			
				$dataPoints1 = array(
				array("label"=> "Aksiyon", "y"=> $a),
				array("label"=> "Komedi", "y"=> $c),
				array("label"=> "Dram", "y"=> $e),
				array("label"=> "Bilim Kurgu", "y"=> $g),
				array("label"=> "Korku", "y"=> $j),
				array("label"=> "Belgesel", "y"=> $l),
				array("label"=> "Animasyon", "y"=> $n),
				array("label"=> "Romantik", "y"=> $p),
);
				$dataPoints2 = array(
				array("label"=> "Aksiyon", "y"=> $b),
				array("label"=> "Komedi", "y"=> $d),
				array("label"=> "Dram", "y"=> $f),
				array("label"=> "Bilim Kurgu", "y"=> $h),
				array("label"=> "Korku", "y"=> $k),
				array("label"=> "Belgesel", "y"=> $m),
				array("label"=> "Animasyon", "y"=> $o),
				array("label"=> "Romantik", "y"=> $r),
);

				
        }
    } else {
        echo "Veri Bulunamadı";
    }
    $baglan->close();

 ?>


<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light 1",
	title:{
		text: "Netflix Tercih Edilen Film Türlerinin Cinsiyetlere Göre Dağılımı"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
	},
	data: [{
		type: "column",
		name: "Erkek",
		indexLabel: "{y}",
		yValueFormatString: "#,##0\" Kişi\"",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Kadın",
		indexLabel: "{y}",
		yValueFormatString: "#,##0\" Kişi\"",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>


<div id="chartContainer" style="height: 370px; width: 100%; margin-top: 5%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                    