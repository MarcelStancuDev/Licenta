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

	<title>Tabele | Analytics &amp; More</title>

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
					<h1 class="h3 mb-0">Tabele</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
              <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
              <li class="breadcrumb-item">Tabele</li>

            </ol>
          </nav>

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

          <h1 class="h3 mb-3 mt-5 mx-3">Tabel al tuturor dispozitivelor</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Tabel unde se pot gasi toate dispozitivele de pe teren, coordonatele acestora, ultima lor data analizata cat si locatia.</h5>
								</div>
								<div class="card-body">
									<table id="datatables-buttons2" class="table table-striped" style="width:100%">
										<thead>
											<tr>
                        <th>ID</th>
                        <th>Nume</th>
                        <th>Coordonate GPS</th>
                        <th>Data crearii</th>
                        <th>Locatie</th>
											</tr>
										</thead>
										<tbody>
                      <?php
                      $query = "SELECT raspberry.id as id,raspberry.nume as nume,raspberry.coordGPS as coordGPS,raspberry.data as data,raspberry.locatie as locatie FROM raspberry,licenta WHERE licenta.idRaspberry = raspberry.id group by id;";
                        $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                        $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach($result as $row)
                        {
                          ?>
                          <tr>
                        <th><?php echo $row['id']; ?></th>
                        <th><?php echo $row['nume']; ?></th>
                        <th><?php echo $row['coordGPS']; ?></th>
                        <th><?php echo $row['data']; ?></th>
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


          <?php
            $query = "SELECT DISTINCT nume FROM licenta";
            $result = mysqli_query($conn,$query) or die("Select Query Failed.");
            $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($result as $row)
            {
              ?>
              <h1 class="h3 mb-3 mt-5 mx-3">Tabel dispozitiv "<?php echo $row['nume']; ?>"</h1><!--Declarare dinamica nume dispozitiv -->

              <div class="row"><!--Div pentru pozitionare intr-un rand-->
    						<div class="col-12"><!--Div pentru pozitionare intr-o coloana -->
    							<div class="card"><!--Div creare card -->
    								<div class="card-header"><!--Capul card-ului -->
    									<h5 class="card-title">Tabel unde se pot regasi date specifice fiecarui dispozitiv in parte.</h5><!--Titlu card situat in header-->
    								</div>
    								<div class="card-body"><!--Inceput continut card -->
    									<table id="datatables-buttons3" class="table table-striped" style="width:100%"><!--Declarare butoane din tabel -->
                        <!--Zona pentru declararea primelor coloane -->
    										<thead>
    											<tr>
                            <th>ID Raspberry Pi</th>
                            <th>Nume</th>
                            <th>Umiditate</th>
                            <th>Timp</th>
                            <th>Coordonate GPS</th>
                            <th>Locatie</th>
    											</tr>
    										</thead>
                        <!--Zona pentru afisarea rezultatelor -->
    										<tbody>
                          <?php
                            $query = "SELECT id,moisture,time,idRaspberry,nume,coordGPS,locatie FROM licenta WHERE nume='".$row['nume']."'"; //Query pentru selectia datelor din BD
                            $result = mysqli_query($conn,$query) or die("Select Query Failed."); //Realizarea conexiunii cu BD
                            $row=mysqli_fetch_all($result, MYSQLI_ASSOC); //Numararea numerului de rezultate
                            foreach($result as $row) // Pentru fiecare rezultat afiseaza continutul
                            {
                              ?>
                              <tr>
                            <th><?php echo $row['idRaspberry']; ?></th> <!--Afisare id Raspberry -->
                            <th><?php echo $row['nume']; ?></th><!--Afisare nume Raspberry -->
                            <th><?php echo $row['moisture']; ?>%</th><!--Afisare umiditate in procente -->
                            <th><?php echo $row['time']; ?></th><!--Afisare timp -->
                            <th><?php echo $row['coordGPS']; ?></th><!--Afisare coordonate GPS-->
                            <th><?php echo $row['locatie']; ?></th><!--Afisare locatie -->
                            </tr>
                            <?php
                            }
                            ?>
                            <!--Zona unde se inchid tabelul si div-urile -->
    										</tbody>
    									</table>
    								</div>
    							</div>
    						</div>
    					</div>

            <?php
            }
            ?>
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
								&copy; 2021 - <a href="home.php" class="text-muted">Marcel Stancu</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

</body>
<script src="js/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEF0dzainkDDyxogITmahRlAMRXyg-gVI&callback=initMap&libraries=&v=weekly"async></script>
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
  			// Datatables with Buttons
  			var datatablesButtons2 = $("#datatables-buttons2").DataTable({
  				responsive: true,
  				lengthChange: !0,
  				buttons: ["copy","csv", "print"]
  			});
  			datatablesButtons2.buttons().container().appendTo("#datatables-buttons2_wrapper .col-md-6:eq(0)");
  		});
  	</script>
    <script>
    		document.addEventListener("DOMContentLoaded", function() {
    			// Datatables with Buttons
    			var datatablesButtons3 = $("#datatables-buttons3").DataTable({ //Creare variabila
    				responsive: true, //Adaugare variabila booleana pentru ca butoanele sa fie responsive
    				lengthChange: !0, //Sa nu poata fi modificate
    				buttons: ["copy","csv", "print"] //Denumire butoane
    			});
    			datatablesButtons3.buttons().container().appendTo("#datatables-buttons3_wrapper .col-md-6:eq(0)");//Atribuire butoane
    		});
    	</script>
      <script>
      		document.addEventListener("DOMContentLoaded", function() {
      			// Datatables with Buttons
      			var datatablesButtons4 = $("#datatables-buttons4").DataTable({
      				responsive: true,
      				lengthChange: !0,
      				buttons: ["copy","csv", "print"]
      			});
      			datatablesButtons4.buttons().container().appendTo("#datatables-buttons4_wrapper .col-md-6:eq(0)");
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
