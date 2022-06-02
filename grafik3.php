<?php require 'baglan.php';
require 'navbar.php';


$sql = "SELECT (SELECT COUNT(uye.cinsiyet) FROM uye WHERE uye.cinsiyet=1) AS erkek, 
(SELECT COUNT(uye.cinsiyet) FROM uye WHERE uye.cinsiyet=0) AS kadin";
    $sonuc = $baglan->query($sql);

    if ($sonuc->num_rows > 0) {

        while($row = $sonuc->fetch_assoc()) {
            
            $a = $row["erkek"];
            $b = $row["kadin"];

            
            
			
            $dataPoints = array(
                array("label"=>"Erkek Üye Sayısı", "y"=>$a),
                array("label"=>"Kadın Üye Sayısı", "y"=>$b),


				
			
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
                        text: "Netflix Üyelerin Cinsiyet Dağılımı"
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
