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
  <?php require_once "dbconfig.php"?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Acasa | Analytics &amp; More</title>

	<link rel="canonical" href="pages-blank.html" />
	<link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>

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
					<h1 class="h3 mb-0">Acasa</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
             <li class="breadcrumb-item">Acasa</li>
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
                  <form name="add" method="post">
                       <select name="age"><?php
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
							<div class="card h-100 py-4 px-5">
								<div class="card-header">
									<h5 class="card-title mb-0">Detalii Profil</h5>
								</div>
								<div class="card-body text-center">
									<img src="img/avatars/avatar.jpg" alt="Stacie Hall" class="img-fluid rounded-circle mb-2" width="128" height="128">
                      <h5 class="card-title mb-0"><?php echo $_SESSION["username"]?></h5>
                      <?php
                      $sql ="SELECT * FROM login";
                      $result = mysqli_query($conn,$sql);
                        while($chart=mysqli_fetch_assoc($result))
                        {
                          if($chart['username']==$_SESSION['username']){?>
                          <div class="text-muted mb-2"><?php echo $chart['email'] ?></div>
                        <?php
                      }}
                      ?>


									<div>
										<a class="btn btn-primary btn-sm" href="editareProfil.php"><i class="align-middle mr-2 fas fa-fw fa-user-edit"></i>Editare profil</a>
                    <a class="btn btn-primary btn-sm" href="logout.php"><i class="align-middle mr-2 fas fa-fw fa-key"></i> Logout</a>
									</div>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">Despre</h5>
									<ul class="list-unstyled mb-0">

										<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm mr-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                      <?php
                      $sql ="SELECT * FROM login";
                      $result = mysqli_query($conn,$sql);
                        while($chart=mysqli_fetch_assoc($result))
                        {
                          if($chart['username']==$_SESSION['username']){?>
                           Traieste in<a href="#"> <?php echo $chart['oras'] ?>
                        <?php
                      }}
                      ?> </a></li>

										<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info align-middle mr-2"><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>Biografie:<b>
                      <?php
                      $sql ="SELECT * FROM login";
                      $result = mysqli_query($conn,$sql);
                        while($chart=mysqli_fetch_assoc($result))
                        {
                          if($chart['username']==$_SESSION['username']){?>
                          <?php echo $chart['biografie'] ?>
                        <?php
                      }}
                      ?></b></li>
										<li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm mr-1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                      <?php
                      $sql ="SELECT * FROM login";
                      $result = mysqli_query($conn,$sql);
                        while($chart=mysqli_fetch_assoc($result))
                        {
                          if($chart['username']==$_SESSION['username']){?>
                           Din<a href="#">  <?php echo $chart['oras'] ?>
                        <?php
                      }}
                      ?> </a></li>
									</ul>
								</div>
							</div>
            </div>
            <!-- Harta -->
            <div class="col-12 col-lg-4">
              <div class="card h-100 py-4"> <!-- Se creeaza un card -->
                <div class="card-header"> <!-- Headerul cardului ce contine titlul -->
                  <i class="fa fa-table"></i> Harta tutoror dispozitivelor pe teren</div>
                <div class="card-body"> <!-- Continutul cardului -->
                <div id="map" style="width:100%;height:400px;"></div> <!-- Se creeaza un div unde se pune harta si i se da un stil pentru incadrarea in pagina -->
                <script> // Scriptul hartii
                var map = L.map('map').setView([45.413190, 28.0300], 7); // Se creaza variabila ce va fi atribuita hartii si se seteaza coordonatele

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map); // Linkurile celor ce au creat aceasta harta
                <?php
                  $numeDispozitiv=array(); // Se creeaza un array
                  $query = "SELECT nume,coordGPS FROM licenta"; // Se selecteaza din Baza de date numele si coordonatele datelor analizate
                  $result = mysqli_query($conn,$query) or die("Select Query Failed."); // Se deschide conexiunea
                  $row=mysqli_fetch_all($result, MYSQLI_ASSOC); // Se aduc toate rezultatele din variabila result
                  foreach($result as $row) // Pentru fiecare rand din result
                  {
                    if(in_array($row['nume'],$numeDispozitiv)==false){ // Daca nu este in array
                    ?>
                    L.marker([<?php echo explode(",",$row['coordGPS'])[0] ?>,<?php echo explode(",",$row['coordGPS'])[1] ?>]).addTo(map) // Se implementeaza pinii pe harta
                        .bindPopup("<a href='detalii.php?nume=<?php echo $row['nume']?>'><?php echo $row['nume']?>") // Se pun popup-uri pentru fiecare senzor pus
                        .openPopup();<?php } array_push($numeDispozitiv,$row['nume']);}?> // Se pun in array numele dispozitivelor

                </script>
              </div>
            </div>
            </div>
					</div>
          <br><br><br>
          <div class="card flex-fill w-100">
            <div class="card-header">
              <h5 class="card-title mb-0">Anunturi</h5>
            </div>
            <div class="card-body">
              <ul class="timeline">
                <?php
                $query = "SELECT * FROM anunturi";
                $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($result as $row)
                {
                  $date = date_create($row['data']);
                  ?>
                <li class="timeline-item">
                  <strong><?php echo $row['tipAnunt']; ?></strong>
                  <span class="float-right text-muted text-sm"><?php echo date_format($date, 'g:ia \o\n l jS F Y');; ?></span>
                  <p><?php echo $row['descriere']; ?></p>
                </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>

          <h1 class="h3 mb-3 mt-5 mx-3">Tabel istoric date analizate</h1>

          <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Filtreaza senzorii de umiditate in functie de:</h5>
								</div>
								<div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col col-12 col-lg-4 d-flex align-items-center">
                    <label class="d-block py-1 pl-2 flex-fill">Nume</label>
                    <select class="form-control mx-2 flex-fill text-right pl-2" style="width:150px" id="numeDisp" name="numeDisp">
                    <?php
                    $sql ="SELECT DISTINCT nume FROM licenta";
                    $result = mysqli_query($conn,$sql);
                      while($chart=mysqli_fetch_assoc($result))
                      {
                        ?><option selected><?php echo $chart['nume']?></option>
                      <?php
                    }
                     ?>
                     </select>
                     <span class="btn btn-primary" onclick="filtrareNume()">Filtreaza</span>
                   </div>
                     <div class="row">
                       <div class="col col-12 col-lg-4 d-flex align-items-center">
                    <label class="d-block py-1 pl-2 flex-fill">Umiditate</label>
                    <select class="form-control mx-2 flex-fill" style="width:80px" id="umiditateMin" name="umiditateMin">
                    <?php
                    $sql ="SELECT DISTINCT moisture FROM licenta ORDER BY moisture ASC";
                    $result = mysqli_query($conn,$sql);
                      while($chart=mysqli_fetch_assoc($result))
                      {
                        ?><option selected><?php echo $chart['moisture']?>%</option>
                      <?php
                    }
                     ?>
                     </select>
                    <select class="form-control mx-2 flex-fill" style="width:80px" id="umiditateMax" name="umiditateMax"><?php
                    $sql ="SELECT DISTINCT moisture FROM licenta ORDER BY moisture ASC";
                    $result = mysqli_query($conn,$sql);
                      while($chart=mysqli_fetch_assoc($result))
                      {
                        ?><option selected><?php echo $chart['moisture']?>%</option>
                      <?php
                    }
                     ?>
                     </select>
                     <span class="btn btn-primary" onclick="filtrareUmiditate()">Filtreaza</span>
                   </div>
                   </div>
                   <div class="row">
                     <div class="col col-12 col-lg-4 d-flex align-items-center">
                    <label class="d-block py-1 pl-2 flex-fill">Perioada</label>
                    <input type="date" id="perioadaMin" name="perioadaMin" class="form-control mx-2 flex-fill" style="width:160px" value="<?php
                    $sql ='SELECT DISTINCT time FROM licenta order by time asc';
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                      while($chart=mysqli_fetch_assoc($result))
                      {
                         $i++;
                         if($i==1){
                           echo explode(" ",$chart['time'])[0];
                         }

                       }
                     ?>" min="
                    <?php
                    $sql ='SELECT DISTINCT time FROM licenta order by time asc';
                    $result = mysqli_query($conn,$sql);
                    $i=0;
                      while($chart=mysqli_fetch_assoc($result))
                      {
                         $i++;
                         if($i==1){
                           echo explode(" ",$chart['time'])[0];
                         }

                       }
                     ?>" max="<?php
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
                      ?>"/>

                      <input type="date" id="perioadaMax" name="perioadaMax" class="form-control mx-2 flex-fill" style="width:160px" value="<?php
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
                       ?>" min="
                      <?php
                      $sql ='SELECT DISTINCT time FROM licenta order by time asc';
                      $result = mysqli_query($conn,$sql);
                      $i=0;
                        while($chart=mysqli_fetch_assoc($result))
                        {
                           $i++;
                           if($i==1){
                             echo explode(" ",$chart['time'])[0];
                           }

                         }
                       ?>" max="<?php
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
                        ?>"/>
                        <span class="btn btn-primary" onclick="filtrarePerioada()">Filtreaza</span>
                      </div>
                      </div>
                      </form>
                  </div>
                  <div id="tabelFiltrare">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
                        <th>ID Raspberry Pi</th>
                        <th>Nume</th>
                        <th>Umiditate</th>
                        <th>Data</th>
                        <th>Ora</th>
                        <th>Coordonate GPS</th>
                        <th>Locatie</th>
											</tr>
										</thead>
										<tbody>
                      <?php
                        $query = "SELECT id,moisture,time,idRaspberry,nume,coordGPS,locatie FROM licenta";
                        $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                        $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach($result as $row)
                        {
                          ?>
                          <tr>
                        <th><?php echo $row['idRaspberry']; ?></th>
                        <th><?php echo $row['nume']; ?></th>
                        <th><?php echo $row['moisture']; ?>%</th>
                        <th><?php echo explode(" ",$row['time'])[0]; ?></th>
                        <th><?php echo explode(" ",$row['time'])[1]; ?></th>
                        <th><?php echo $row['coordGPS']; ?></th>
                        <th><?php echo $row['locatie']; ?></th>
                        </tr>
                        <?php
                        }
                        ?>
										</tbody>
									</table>
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
          $sql ="SELECT * FROM licenta";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              echo "'".$chart['time']."',";
            }
           ?>],
					datasets: [{
						label: "Model S",
						data: [<?php
            $sql ="SELECT * FROM licenta";
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
				lengthChange: !0,
				buttons: ["copy","csv", "print"]
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
            $numeSenzor = $_POST['age'];
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
            $numeSenzor = $_POST['age'];
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
var tabelFiltrare = document.getElementById("tabelFiltrare");
var numeDisp = document.getElementById("numeDisp");
var perioadaMin= document.getElementById("perioadaMin");
var perioadaMax= document.getElementById("perioadaMax");
var umiditateMin= document.getElementById("umiditateMin");
var umiditateMax= document.getElementById("umiditateMax");
  function filtrareNume(){
  	var xhttpFiltrare = new XMLHttpRequest();

  	xhttpFiltrare.addEventListener('load', function(e) {
    console.log(numeDisp.value);
  	tabelFiltrare.innerHTML = this.responseText;
  	}, false);

  	xhttpFiltrare.open('POST', "filtrare.php?status=nume&numeD="+numeDisp.value);
  	xhttpFiltrare.send();
  }
  function filtrareUmiditate(){
    var xhttpFiltrare = new XMLHttpRequest();

  	xhttpFiltrare.addEventListener('load', function(e) {
    console.log(numeDisp.value);
  	tabelFiltrare.innerHTML = this.responseText;
  	}, false);

  	xhttpFiltrare.open('POST', "filtrare.php?status=umiditate&umiditateMin="+umiditateMin.value+"&umiditateMax="+umiditateMax.value);
  	xhttpFiltrare.send();
  }
  function filtrarePerioada(){
    var xhttpFiltrare = new XMLHttpRequest();

  	xhttpFiltrare.addEventListener('load', function(e) {
    console.log(perioadaMin.value);
    console.log(perioadaMax.value);
  	tabelFiltrare.innerHTML = this.responseText;
  	}, false);

  	xhttpFiltrare.open('POST', "filtrare.php?status=perioada&perioadaMin="+perioadaMin.value+"&perioadaMax="+perioadaMax.value);
  	xhttpFiltrare.send();
  }

</script>

</html>
