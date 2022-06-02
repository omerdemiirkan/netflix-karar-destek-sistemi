<?php require 'baglan.php';
require 'navbar.php';

$sql = "SELECT (SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=1) AS aksiyon, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=2) AS komedi, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=3) AS dram, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=4) AS bilim, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=5) AS korku, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=6) AS belgesel, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=7) AS animasyon, 
(SELECT COUNT(uye_tur.tur_no) FROM uye_tur WHERE uye_tur.tur_no=8) AS romantik";
    $sonuc = $baglan->query($sql);

    if ($sonuc->num_rows > 0) {

        while($row = $sonuc->fetch_assoc()) {
            
            $a = $row["aksiyon"];
            $b = $row["komedi"];
            $c = $row["dram"];
            $d = $row["bilim"];
            $e = $row["korku"];
            $f = $row["belgesel"];
            $g = $row["animasyon"];
            $h = $row["romantik"];
            
            
            
            $dataPoints = array(
                array("label"=>"Aksiyon", "y"=> $a),
                array("label"=>"Komedi", "y"=>$b),
                array("label"=>"Dram", "y"=>$c),
                array("label"=>"Bilim Kurgu", "y"=>$d),
                array("label"=>"Korku", "y"=>$e),
                array("label"=>"Belgesel", "y"=>$f),
                array("label"=>"Animasyon", "y"=>$g),
                array("label"=>"Romantik", "y"=>$h),
                
            
            );


        }
    } else {
        echo "Veri Bulunamadı";
    }
    $baglan->close();


?>

        <script>
            window.onload = function() {


                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title: {
                        text: "Netflix Üyelerin Film Türü Tercihleri"
                    },
                    data: [{
                        type: "pie",
                        yValueFormatString: "#,##0\" Kişi\"",
                        indexLabel: "{label} ({y})",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();

            }
        </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%; margin-top: 5%; "></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>