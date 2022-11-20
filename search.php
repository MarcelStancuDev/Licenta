<?php
include "dbconfig.php";
?>
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

	<title>Cautare | Analytics &amp; More</title>

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
					<h1 class="h3 mb-0">Cautare</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
             <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
             <li class="breadcrumb-item">Cautare</li>
            </ol>
          </nav>
        <?php
          $var_submit=$_GET['query']; // Variabila ce primeste textul prin GET
          if(isset($var_submit)){ // Data este setat
            $query = "SELECT * FROM licenta WHERE nume LIKE '%{$var_submit}%' or locatie LIKE '%{$var_submit}'"; // Query pentru selectarea din baza de date
            $result = mysqli_query($conn,$query) or die("Select Query Failed."); // Creare conexiune
            $row=mysqli_fetch_all($result, MYSQLI_ASSOC); //Numarare numar de rezultate
            $nrGasite= mysqli_num_rows($result); // Numarare rezultate
            if($nrGasite==0){ //Daca nu s-au gasit rezultate
              ?>
              <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Eroare cautare</h5>
								</div>
                <div class="card-body">

                <h1>Ne pare rau! Nu am putut gasi niciun dispozitiv cu numele acesta sau care sa aiba locatia aceasta!</h1> <!--Afisare rezultat -->
                <h1>Va multumim!</h1>
                </div>
							</div>
              <?php
            }else{ // Daca exista rezultate se afiseaza informatiile
              foreach($result as $row) // Pentru fiecare rezultat
              {

                ?>

            <?php
            }
            ?>
    <div class="row">
        <div class="col-12 col-lg-6">
          <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Informatii dispozitiv</h5>
								</div>
								<div class="card-body">
									<dl class="row">
										<dt class="col-4 col-xxl-3">Nume dispozitiv</dt>
										<dd class="col-8 col-xxl-9">
											<h4><?php echo $row['nume']; ?></h4> <!--Afisare rezultate -->
										</dd>
									</dl>

									<hr>

									<dl class="row">
										<dt class="col-4 col-xxl-3">Ultima data analizata</dt>
										<dd class="col-8 col-xxl-9">
											<h5 class="mb-1"><?php echo $row['time']; ?></h5>
										</dd>
									</dl>
									<hr>

									<dl class="row mb-1">
										<dt class="col-4 col-xxl-3">Status</dt>
										<dd class="col-8 col-xxl-9">
											<span class="badge badge-info mb-1"><?php echo $row['status']; ?></span>
										</dd>
                    </dl>
                    <hr>
                    <dl class="row mb-1">
										<dt class="col-4 col-xxl-3">Coordonate GPS</dt>
										<dd class="col-8 col-xxl-9">
											<h5 class="mb-1"><?php echo $row['coordGPS']; ?></h5>
										</dd>

									</dl>
                  <hr>
                  <dl class="row mb-1">
                  <dt class="col-4 col-xxl-3">Locatie</dt>
                  <dd class="col-8 col-xxl-9">
                    <h5 class="mb-1"><?php echo $row['locatie']; ?></h5>
                  </dd>

                </dl>
								</div>
							</div>
            </div>
            </div>
					<h1 class="h3 mb-3 mt-5 mx-3">Rezultate cautare</h1>
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
                        $query = "SELECT id,moisture,time,idRaspberry,nume,coordGPS,locatie FROM licenta WHERE nume LIKE '%{$var_submit}%' or locatie LIKE '%{$var_submit}%'";
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
        <?php
      }
    }?>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEF0dzainkDDyxogITmahRlAMRXyg-gVI&callback=initMap&libraries=&v=weekly"async></script>

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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Datatables with Buttons
    var datatablesButtons = $("#datatables-buttons").DataTable({
      responsive: true,
      lengthChange: !1,
      buttons: ["copy","csv", "print"]
    });
    datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
  });
</script>



</html>
