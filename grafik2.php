<?php require 'baglan.php';
require 'navbar.php';

$sql = "SELECT (SELECT COUNT(uye_yas.yas_no) FROM uye_yas WHERE uye_yas.yas_no=1) AS 7yasalti, 
(SELECT COUNT(uye_yas.yas_no) FROM uye_yas WHERE uye_yas.yas_no=2) AS 713arasi, 
(SELECT COUNT(uye_yas.yas_no) FROM uye_yas WHERE uye_yas.yas_no=3) AS 1318arasi, 
(SELECT COUNT(uye_yas.yas_no) FROM uye_yas WHERE uye_yas.yas_no=4) AS 1825arasi, 
(SELECT COUNT(uye_yas.yas_no) FROM uye_yas WHERE uye_yas.yas_no=5) AS 25ustu"; 

    $sonuc = $baglan->query($sql);

    if ($sonuc->num_rows > 0) {

        while($row = $sonuc->fetch_assoc()) {
            
            $a = $row["7yasalti"];
            $b = $row["713arasi"];
            $c = $row["1318arasi"];
            $d = $row["1825arasi"];
            $e = $row["25ustu"];

            
            
			
            $dataPoints = array(
                array("label"=>"0-7 Yaş Arası", "y"=> $a),
                array("label"=>"7-13 Yaş Arası", "y"=>$b),
                array("label"=>"13-18 Yaş Arası", "y"=>$c),
                array("label"=>"18-25 Yaş Arası", "y"=>$d),
                array("label"=>"25 Yaş Üstü", "y"=>$e),

				
			
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
                        text: "Netflix Üyelerin Yaş Aralıkları"
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


    <div id="chartContainer" style="height: 370px; width: 100%; margin-top: 5%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>