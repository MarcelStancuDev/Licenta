<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <?php require_once "dbconfig.php";?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Grafice | Analytics &amp; More</title>

	<link rel="canonical" href="pages-blank.html" />
	<link rel="shortcut icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<div class="main">
    <?php include("header.php"); ?>
			<main class="container py-5">
					<h1 class="h3 mb-0">Grafice</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
              <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
              <li class="breadcrumb-item">Grafice</li>
            </ol>
          </nav>
					<div class="row">
						<div class="col-12 col-lg-4">
                <div class="card py-4 h-100">
								<div class="card-header">
									<h5 class="card-title">Grafic reprezentare date</h5>
									<h6 class="card-subtitle text-muted">Reprezentare grafica a umiditatii din sol(%) la data respectiva.</h6>
                  <br>
                  <label for="input">Alege nume senzor</label>
                  <form name="formPie" method="post">
                       <select name="pie"><?php
                         $query = "SELECT * FROM licenta group by nume";
                         $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                         $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                         foreach($result as $row)
                         {
                           ?>
                           <option selected="" value="<?php echo $row['idRaspberry']; ?>"><?php echo $row['nume']; ?></option>
                         <?php
                         }
                         ?>

                       </select>
                       <button name="graficpie" id="graficpie" type="submit" class="btn btn-primary">Seteaza</button>
                  </form>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-pie"></canvas>
									</div>
								</div>
							</div>
						</div>
            <div class="col-12 col-lg-4">
							<div class="card h-100 py-4 px-1 flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title">Grafic liniar al datelor</h5>
									<h6 class="card-subtitle text-muted">Reprezentare grafica liniara a datelor analizate pe perioade de timp.</h6>
								</div>
								<div class="card-body">
									<div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
										<canvas id="chartjs-line" style="display: block; height: 300px; width: 386px;" width="482" height="375" class="chartjs-render-monitor"></canvas>
									</div>
								</div>
							</div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card h-100 py-4">
								<div class="card-header">
									<h5 class="card-title">Grafic date analizate pe regiuni</h5>
									<h6 class="card-subtitle text-muted">In acest grafic sunt reprezentate cate date analizate au fost facute in fiecare locatie in parte.</h6>
								</div>
								<div class="card-body">
									<div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
										<canvas id="chartjs-polar-area" width="482" height="375" class="chartjs-render-monitor" style="display: block; height: 400px; width: 400px;"></canvas>
									</div>
								</div>
							</div>
            </div>
					</div>

      <h1 class="h3 mb-3 mt-5 mx-3"></h1>
      <div class="row"> <!--Afisare intr-un rand-->
        <div class="col-12"><!--Afisare intr-o coloana-->
          <div class="card"><!--Declarare card-->
          	<div class="card-header"><!--Headerul cardului-->
          			<h5 class="card-title">Grafic de suprafata</h5><!--Titlu -->
          			<h6 class="card-subtitle text-muted">Reprezentarea evolutiei variatiei umiditatii.</h6><!--Descriere -->
                <br>
                <label for="input">Alege nume senzor</label><!--Eticheta pentru filtrare -->
                <form name="formSuprafata" method="post"><!--Form pentru trimitere date prin metoda post -->
                     <select name="suprafata"><?php
                       $query = "SELECT * FROM licenta group by nume";//Interogare
                       $result = mysqli_query($conn,$query) or die("Select Query Failed.");//Conectare si realizare interogare
                       $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                       foreach($result as $row)//Pentru fiecare rezultat din rand se executa
                       {
                         ?>
                         <option selected="" value="<?php echo $row['nume']; ?>"><?php echo $row['nume']; ?></option><!--Afisare optiuni -->
                       <?php
                       }
                       ?>

                     </select>
                     <button name="graficsuprafata" id="graficsuprafata" type="submit" class="btn btn-primary">Seteaza</button><!--Afisare buton de filtrare -->
                </form>
          	</div>
            <div class="card-body">
          		<div class="chart w-100">
          			<div id="apexcharts-area"></div><!--Declarare grafic -->
          		</div>
          	</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
    				<div class="card-header">
    					<h5 class="card-title">Grafic liniar</h5><hr>
              <h6 class="card-subtitle text-muted">Selecteaza senzorii.</h6>
              <br>
              <form name="formLiniar" method="post">
                <div class="row">
                  <div class="col col-12 col-lg-4 d-flex align-items-center">
                  <label class="d-block py-1 pl-2 flex-fill w-50 text-right" for="input">Primul senzor</label>
                       <select class="form-control mx-2 flex-fill text-right pl-2 w-50" style="width:150px" name="age1"><?php
                         $query = "SELECT * FROM licenta group by nume";
                         $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                         $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                         foreach($result as $row)
                         {
                           ?>
                           <option selected="" value="<?php echo $row['nume']; ?>"><?php echo $row['nume']; ?></option>
                         <?php
                         }
                         ?>
                       </select>
                     </div>
                     <div class="col col-12 col-lg-4 d-flex align-items-center">
                  <label class="d-block py-1 pl-2 flex-fill w-50 text-right" for="input">Al doilea senzor</label>
                       <select class="form-control mx-2 flex-fill text-right pl-2 w-50" style="width:150px" name="age2"><?php
                         $query = "SELECT * FROM licenta group by nume";
                         $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                         $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                         foreach($result as $row)
                         {
                           ?>
                           <option selected="" value="<?php echo $row['nume']; ?>"><?php echo $row['nume']; ?></option>
                         <?php
                         }
                         ?>
                       </select>
                     </div>
                     <div class="col col-12 col-lg-4 d-flex align-items-center">
                  <label class="d-block py-1 pl-2 flex-fill w-50 text-right" for="input">Al treilea senzor</label>
                       <select class="form-control mx-2 flex-fill text-right pl-2 w-50" style="width:150px" name="age3"><?php
                         $query = "SELECT * FROM licenta group by nume";
                         $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                         $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                         foreach($result as $row)
                         {
                           ?>
                           <option selected="" value="<?php echo $row['nume']; ?>"><?php echo $row['nume']; ?></option>
                         <?php
                         }
                         ?>
                       </select>
                     </div>
                     </div>

                       <?php
                       $dataMinima="2021-04-04";
                       $dataMaxima="2021-07-05";
                       $sql ='SELECT DISTINCT time FROM licenta order by time asc';
                       $result = mysqli_query($conn,$sql);
                       $i=0;
                         while($chart=mysqli_fetch_assoc($result))
                         {
                            $i++;
                            if($i==1){
                              $dataMinima=explode(" ",$chart['time'])[0];
                            }

                          }

                         $sql ='SELECT DISTINCT time FROM licenta order by time desc';
                         $result = mysqli_query($conn,$sql);
                         $i=0;
                           while($chart=mysqli_fetch_assoc($result))
                           {
                              $i++;
                              if($i==1){
                                $dataMaxima=explode(" ",$chart['time'])[0];
                              }

                            }
                          ?>

                          <?php
                          $perioadaMinGrafic=$dataMinima;
                          $perioadaMaxGrafic=$dataMaxima;
                          $sql ="SELECT * FROM licenta WHERE  time BETWEEN '".$dataMinima."' and '".$dataMaxima."'";
                          if(isset($_POST['graficliniar'])) {
                          $perMinG=$_POST['perioadaMinGrafic'];
                          $perMaxG=$_POST['perioadaMaxGrafic'];
                          $sql ="SELECT * FROM licenta WHERE  time BETWEEN '".$perMinG."' and '".$perMaxG."'";
                          }
                          $result = mysqli_query($conn,$sql);
                          $perioadaLimita=mysqli_num_rows($result);
                          ?>

                          <hr>
                          <h6 class="card-subtitle text-muted">Selecteaza perioada.</h6>
                          <br>
                  <div class="row">
                    <div class="col col-12 col-lg-4 d-flex align-items-center">
                  <label class="d-block py-1 pl-2 flex-fill w-50 text-right">Data minima</label>
                  <input type="date" id="perioadaMinGrafic" name="perioadaMinGrafic" class="form-control mx-2 flex-fill w-50" style="width:160px" value="<?php
                  if(isset($_POST['graficliniar'])) {
                    echo $_POST['perioadaMinGrafic'];
                  }else{
                    echo $dataMinima;
                  }
                   ?>" min="  <?php echo $dataMinima;?>" max="<?php echo $dataMaxima;?>"/>
                 </div>
                 <div class="col col-12 col-lg-4 d-flex align-items-center">
                   <label class="d-block py-1 pl-2 flex-fill w-50 text-right">Data maxima</label>
                    <input type="date" id="perioadaMaxGrafic" name="perioadaMaxGrafic" class="form-control mx-2 flex-fill w-50" style="width:160px" value="<?php
                    if(isset($_POST['graficliniar'])) {
                      echo $_POST['perioadaMaxGrafic'];
                    }else{
                    $sql ='SELECT DISTINCT time FROM licenta order by time desc';
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                      while($chart=mysqli_fetch_assoc($result))
                      {
                         $i++;
                         if($i==1){
                           echo explode(" ",$chart['time'])[0];
                         }
                       }
                     }
                     ?>" min="<?php echo $dataMinima?>" />
                   </div>

                   <div class="col col-12 col-lg-4 d-flex align-items-center justify-content-center">
                      Perioada selectata: <?php echo$perioadaLimita; ?> zile.
                     </div>
                </div>
                <hr>
                <div class="pb-2 text-center">
                <button name="graficliniar" id="graficliniar" type="submit" class="btn btn-primary mx-auto">Seteaza</button>
              </div>
              </form>
    				</div>
    				<div class="card-body">
    					<div class="chart w-100">
    						<div id="apexcharts-line"></div>
    					</div>
    				</div>
    			</div>
        </div>
      </div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">
								&copy; 2021 - <a href="home.php" class="text-muted">Stancu Marcel</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
  <?php require_once "dbconfig.php";?>

</body>
<script src="js/app.js"></script>
<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Polar Area chart
			new Chart(document.getElementById("chartjs-polar-area"), {
				type: "polarArea",
				data: {
					labels: [<?php
          $sql ="SELECT DISTINCT locatie FROM licenta";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['locatie']."',";
            }
           ?>],
					datasets: [{
						label: "Model S",
						data: [<?php
            $sql ="SELECT COUNT(locatie) as loc FROM licenta group by locatie";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "'".$chart['loc']."',";
              }
             ?>],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info
						]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>

  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>
  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart

			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
				data: {
					labels: [<?php
          if(isset($_POST['graficpie'])) {
            $numeSenzor = $_POST['pie'];
          }else{
            $numeSenzor=1;}
          $sql ="SELECT * FROM licenta WHERE idRaspberry='$numeSenzor'";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['time']."',";
            }
           ?>],
					datasets: [{
						data: [<?php
            if(isset($_POST['graficpie'])) {
            $numeSenzor = $_POST['pie'];
          }else{
            $numeSenzor=1;}

            $sql ="SELECT * FROM licenta WHERE idRaspberry='$numeSenzor'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "".$chart['moisture'].",";
              }
             ?>],
						backgroundColor: [
              window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info,window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info,window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info,window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>

  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Area chart
			var options = {
				chart: {
					height: 350,
					type: "area",
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: "smooth"
				},
				series: [{
					name: "Umiditate(%)",
					data: [<?php
          if(isset($_POST['graficsuprafata'])) {
          $numeSenzor = $_POST['suprafata'];
        }else{
          $numeSenzor='senzor_umiditate1';}
          $sql ="SELECT * FROM licenta where nume = '$numeSenzor'";
          $result = mysqli_query($conn,$sql);
          $perioadaLimita=mysqli_num_rows($result);
          $idSenzorSelectat = 0;
            while($chart=mysqli_fetch_assoc($result))
            { $idSenzorSelectat=$chart['idRaspberry'];
              echo "".$chart['moisture'].",";
            }
           ?>]
				},{
          name: "Valoare minima",
          data: [<?php
          $id = $_SESSION['id'];
          $sql ="SELECT umiditateMinima,idSenzor FROM login WHERE id = '$id'";
          $result = mysqli_query($conn,$sql);
          while($chart=mysqli_fetch_assoc($result))
            {
              $idSenzor=$chart['idSenzor'];
            }
            $arrayMinMax = array(20 , 80);
            $arraySenzor = explode(",",$idSenzor);
          foreach ($arraySenzor as $k) {
              $arrayIdAndUmiditate = explode(":",$k);
              if($arrayIdAndUmiditate[0] == $idSenzorSelectat)
              {
                $arrayMinMax = explode("|",$arrayIdAndUmiditate[1]);
              }
            }
            foreach (range(0, $perioadaLimita) as $i) {
                echo "'".$arrayMinMax[0]."',";
              }
           ?>]
        },{
          name: "Valoare maxima",
          data: [<?php
          $id = $_SESSION['id'];
          $sql ="SELECT umiditateMinima,idSenzor FROM login WHERE id = '$id'";
          $result = mysqli_query($conn,$sql);
          while($chart=mysqli_fetch_assoc($result))
            {
              $idSenzor=$chart['idSenzor'];
            }
            $arrayMinMax = array(20 , 80);
            $arraySenzor = explode(",",$idSenzor);
          foreach ($arraySenzor as $k) {
              $arrayIdAndUmiditate = explode(":",$k);
              if($arrayIdAndUmiditate[0] == $idSenzorSelectat)
              {
                $arrayMinMax = explode("|",$arrayIdAndUmiditate[1]);
              }
            }
            foreach (range(0, $perioadaLimita) as $i) {
                echo "'".$arrayMinMax[1]."',";
              }
           ?>]
        }],
				xaxis: {
					type: "datetime",
					categories: [<?php
          if(isset($_POST['graficsuprafata'])) {
          $numeSenzor = $_POST['suprafata'];
        }else{
          $numeSenzor='senzor_umiditate1';}
          $sql ="SELECT * FROM licenta where nume = '$numeSenzor'";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['time']."',";
            }
           ?>],
				},
				tooltip: {
					x: {
						format: "dd/MM/yy HH:mm"
					},
				},

			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-area"),
				options
			);
			chart.render();
		});
	</script>

  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Line chart
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: {
					labels: [<?php

          $sql ="SELECT DATE_FORMAT(time, '%Y %M %W') AS time FROM licenta";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['time']."',";
            }
           ?>],
					datasets: [{
						label: "Umiditate(%)",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [<?php
            $sql ="SELECT * FROM licenta ";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "'".$chart['moisture']."',";
              }
             ?>]
					}]

				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>

  <?php
  $perioadaMinGrafic=$dataMinima;
  $perioadaMaxGrafic=$dataMaxima;
  $sql ="SELECT * FROM licenta WHERE nume='$numeSenzor' AND time BETWEEN '".$dataMinima."' and '".$dataMaxima."'";
  if(isset($_POST['graficliniar'])) {
  $perMinG=$_POST['perioadaMinGrafic'];
  $perMaxG=$_POST['perioadaMaxGrafic'];
  $sql ="SELECT * FROM licenta WHERE nume='$numeSenzor' AND time BETWEEN '".$perMinG."' and '".$perMaxG."'";
  }
  $result = mysqli_query($conn,$sql);
  $perioadaLimita=mysqli_num_rows($result);
  ?>
  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Line chart
			var options = {
				chart: {
					height: 350,
					type: "line",
					zoom: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					width: [5, 7, 5],
					curve: "straight",
					dashArray: [0, 8, 5]
				},
				series: [{
						name: "<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age1'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate1';}
            $sql ="SELECT DISTINCT nume FROM licenta WHERE nume='$numeSenzor'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "".$chart['nume']."";
              }
             ?>",
						data: [<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age1'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate1';}
            $sql ="SELECT * FROM licenta WHERE nume='$numeSenzor' AND time BETWEEN '".$perioadaMinGrafic."' and '".$perioadaMaxGrafic."'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "'".$chart['moisture']."',";
              }
             ?>]
					},
					{
						name: "<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age2'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate2';}
            $sql ="SELECT DISTINCT nume FROM licenta WHERE nume='$numeSenzor'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "".$chart['nume']."";
              }
             ?>",
						data: [<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age2'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate2';}
            $sql ="SELECT * FROM licenta WHERE nume='$numeSenzor' AND time BETWEEN '".$perioadaMinGrafic."' and '".$perioadaMaxGrafic."'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "'".$chart['moisture']."',";
              }
             ?>]
					},
					{
						name: "<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age3'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate3';}
            $sql ="SELECT DISTINCT nume FROM licenta WHERE nume='$numeSenzor'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "".$chart['nume']."";
              }
             ?>",
						data: [<?php
            if(isset($_POST['graficliniar'])) {
              $numeSenzor = $_POST['age3'];
              $perioadaMinGrafic = $_POST['perioadaMinGrafic'];
              $perioadaMaxGrafic = $_POST['perioadaMaxGrafic'];
            }else{
              $numeSenzor='senzor_umiditate3';}
            $sql ="SELECT * FROM licenta WHERE nume='$numeSenzor' AND time BETWEEN '".$perioadaMinGrafic."' and '".$perioadaMaxGrafic."'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                echo "'".$chart['moisture']."',";
              }
             ?>]
					},
          {
						name: "Valoare maxima",
						data: [<?php
            $nameSession=$_SESSION['username'];

            $sql ="SELECT umiditateMaxima FROM login WHERE username='".$_SESSION["username"]."'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                foreach (range(1, $perioadaLimita) as $i) {
                foreach ($result as $value) {
                  echo "'".$chart['umiditateMaxima']."',";
                }
              }
              }
             ?>]
					},
          {
						name: "Valoare minima",
						data: [<?php
            $nameSession=$_SESSION['username'];

            $sql ="SELECT umiditateMinima FROM login WHERE username='".$_SESSION["username"]."'";
            $result = mysqli_query($conn,$sql);
              while($chart=mysqli_fetch_assoc($result))
              {
                foreach (range(1, $perioadaLimita) as $i) {
                  foreach ($result as $value) {
                  echo "'".$chart['umiditateMinima']."',";
              }
            }}
             ?>]
					}
				],
				markers: {
					size: 0,
					style: "hollow",
				},
				xaxis: {
					categories: [<?php
          $sql ="SELECT DATE_FORMAT(time, '%Y %M %W %D') AS time FROM licenta";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['time']."',";
            }
           ?>],
				},
				tooltip: {
					y: [{
						title: {
							formatter: function(val) {
								return val + ":"
							}
						}
					}, {
						title: {
							formatter: function(val) {
								return val + ":"
							}
						}
					}, {
						title: {
							formatter: function(val) {
								return val + ":";
							}
						}
					}]
				},
				grid: {
					borderColor: "#f1f1f1",
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-line"),
				options
			);
			chart.render();
		});
	</script>
</html>
