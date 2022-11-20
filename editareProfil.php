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

	<title>Editare profil | Analytics &amp; More</title>

	<link rel="canonical" href="pages-blank.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">


	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
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
					<h1 class="h3 mb-0">Editare profil</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
              <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
              <li class="breadcrumb-item">Editare profil</li>

            </ol>
          </nav>
          <div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Setari</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab" aria-selected="true">
          Cont
        </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab" aria-selected="false">
          Parola
        </a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#preferences" role="tab" aria-selected="false">
          Preferinte notificari
        </a>

								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade active show" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Informatii publice</h5>
										</div>
										<div class="card-body">
                      <?php
                       require_once "dbconfig.php";
                       if(isset($_POST['update3'])) {
                          if(! $conn ) {
                             die('Could not connect: ' . mysqli_error());
                          }
                          $id = $_SESSION['id'];
                          $username = $_POST['inputUsername'];
                          $biografie = $_POST['inputBio'];

                          $sql = "UPDATE login SET username='$username',biografie = '$biografie' WHERE id = '$id'" ;
                          $retval = mysqli_query($conn,$sql);

                          if(! $retval ) {
                             echo mysqli_error($conn);
                          }else{
                              echo "Date modificate cu succes!\n";
                          }


                       }
                          ?>
											<form method = "post" action = "<?php $_PHP_SELF ?>">
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label for="inputUsername">Nume de utilizator</label>
															<input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Nume de utilizator">
														</div>
														<div class="form-group">
															<label for="inputUsername">Biografie</label>
															<textarea rows="2" class="form-control" name="inputBio" id="inputBio" placeholder="Scrie ceva despre tine"></textarea>
														</div>
													</div>
												</div>
												<button name="update3" id="update3" type="submit" class="btn btn-primary">Salveaza modificarile</button>
											</form>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Informatii private</h5>
										</div>
										<div class="card-body">
                      <?php
                       require_once "dbconfig.php";
                       if(isset($_POST['update'])) {
                          if(! $conn ) {
                             die('Could not connect: ' . mysqli_error());
                          }
                          $username = $_SESSION['username'];
                          $numeFam = $_POST['inputFirstName'];
                          $prenume = $_POST['inputLastName'];
                          $email = $_POST['inputEmail4'];
                          $adresa=$_POST['inputAddress'];
                          $oras=$_POST['inputCity'];
                          $zip=$_POST['inputZip'];

                          $sql = "UPDATE login SET email='$email',numeFam = '$numeFam',prenume='$prenume',adresa='$adresa',oras='$oras',zip='$zip' WHERE username = '$username'" ;
                          $retval = mysqli_query($conn,$sql);

                          if(! $retval ) {
                             echo mysqli_error($conn);
                          }else{
                              echo "Date modificate cu succes!\n";
                          }


                       }
                          ?>
											<form method = "post" action = "<?php $_PHP_SELF ?>">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">Nume</label>
														<input name="inputFirstName" type="text" class="form-control" id="inputFirstName" placeholder="Nume">
													</div>
													<div class="form-group col-md-6">
														<label for="inputLastName">Prenume</label>
														<input type="text" class="form-control" name="inputLastName" id="inputLastName" placeholder="Prenume">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail4">Email</label>
													<input type="email" class="form-control" name="inputEmail4" id="inputEmail4" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="inputAddress">Adresa</label>
													<input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
												</div>
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputCity">Oras</label>
														<input type="text" class="form-control" name="inputCity" id="inputCity">
													</div>
													<div class="form-group col-md-2">
														<label for="inputZip">Zip</label>
														<input type="text" class="form-control" name="inputZip" id="inputZip">
													</div>
												</div>
												<button name = "update" id="update" type="submit" class="btn btn-primary">Salveaza schimbarile</button>
											</form>

										</div>
									</div>

								</div>
                <!-- Schimba parola -->
                <?php
                require_once "dbconfig.php";
                $username = $_SESSION['username'];

                $new_password = $confirm_password = "";
                $new_password_err = $confirm_password_err = "";
                if(isset($_POST['update2'])) {
                  $pass = $_POST['inputPasswordNew'];
                  $pass2 = $_POST['inputPasswordNew2'];
                    if(empty(trim($pass))){
                        $new_password_err = "Please enter the new password.";
                        echo $new_password_err;
                    } elseif(strlen(trim($pass)) < 6){
                        $new_password_err = "Password must have atleast 6 characters.";
                        echo $new_password_err;
                    } else{
                        $new_password = trim($pass);
                    }

                    if(empty(trim($pass2))){
                        $confirm_password_err = "Please confirm the password.";
                        echo $confirm_password_err;
                    } else{
                        $confirm_password = trim($pass2);
                        if(empty($new_password_err) && ($new_password != $confirm_password)){
                            $confirm_password_err = "Password did not match.";
                            echo $confirm_password_err;
                        }
                    }

                    if(empty($new_password_err) && empty($confirm_password_err)){

                        $sql = "UPDATE login SET password = '$pass', cpassword='$pass2' WHERE username = '$username'";
                        $retval = mysqli_query($conn,$sql);
                        if(! $retval ) {
                           echo mysqli_error($conn);
                        }else{
                            echo "Parola schimbata cu succes!\n";
                        }
                        }
                    }
                ?>
								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Modificare parola</h5>
											<form method = "post" action = "<?php $_PHP_SELF ?>">
												<div class="form-group">
													<label for="inputPasswordNew">Noua parola</label>
													<input type="password" class="form-control" name="inputPasswordNew" id="inputPasswordNew">
												</div>
												<div class="form-group">
													<label for="inputPasswordNew2">Verifica parola</label>
													<input type="password" class="form-control" name="inputPasswordNew2" id="inputPasswordNew2">
												</div>
												<button name="update2" id="update2" type="submit" class="btn btn-primary">Salveaza modificarile</button>
											</form>
										</div>
									</div>
								</div>
                <div class="tab-pane fade" id="preferences" role="tabpanel">
                  <div class="card">
    								<div class="card-header">
    									<div class="card-actions float-right">
    									</div>
    									<h5 class="card-title mb-0">Preferinte senzor</h5>
    								</div>
                    <?php
                     require_once "dbconfig.php";
                     if(isset($_POST['filtrare'])) {
                        if(! $conn ) {
                           die('Could not connect: ' . mysqli_error());
                        }
                        $id = $_SESSION['id'];
                        $umiditateMinima = $_POST['umidMinima'];
                        $umiditateMaxima = $_POST['umidMaxima'];
                        if(isset($_POST['notificareUmid'])){
                          $checkNotification=1;
                        }else{
                          $checkNotification=0;
                        }
                        $arraySenzori="";
                        $i=0;
                        foreach($_POST['lang'] as $value){
                            $i++;
                            if($i!=1){
                            $arraySenzori .= ",";
                            }
                            $idUmidMinim = 'umidMinima'.$value;
                            $idUmidMaxim = 'umidMaxima'.$value;
                            $inputUmidArray = ":".$_POST[$idUmidMinim]."|".$_POST[$idUmidMaxim];
                            $arraySenzori .= $value.$inputUmidArray;

                        }
                        $sql = "UPDATE login SET notificari='$checkNotification',idSenzor='$arraySenzori' WHERE id = '$id'" ;
                        $retval = mysqli_query($conn,$sql);

                        if(! $retval ) {
                           echo mysqli_error($conn);
                        }else{
                            echo "Date modificate cu succes!\n";
                        }
                     }
                        ?>
                    <form method = "post" action = "<?php $_PHP_SELF ?>">
                    <?php
                  $sql ="SELECT * FROM login";
                  $result = mysqli_query($conn,$sql);
                    while($chart=mysqli_fetch_assoc($result))
                    {
                      if($chart['username']==$_SESSION['username']){
                       $valMin=$chart['umiditateMinima'];
                       $valMax=$chart['umiditateMaxima'];
                       $notificari = $chart['notificari'];
                       $selectedSensor=$chart['idSenzor'];
                  }}
                  ?>

    								<div class="card-body">
                        <h5 class="card-title mb-0">Selecteaza senzorii de la care vrei notificari</h5>
                        <table id="datatables-buttons2" class="table table-striped" style="width:100%">
      										<thead>
      											<tr>
                              <th>Selecteaza</th>
                              <th>Nume</th>
                              <th>Locatie</th>
                              <th>Umiditate minima</th>
                              <th>Umiditate maxima</th>
      											</tr>
      										</thead>
      										<tbody>
                            <?php
                              $id = $_SESSION['id'];
                              $sql2 ="SELECT umiditateMinima,umiditateMaxima,idSenzor FROM login WHERE id = '$id'";
                              $result2 = mysqli_query($conn,$sql2);
                              while($chart2=mysqli_fetch_assoc($result2))
                              { $idSenzor=$chart2['idSenzor'];
                                $arrayIdSenzor=array();
                                $arraySenzor = explode(",",$idSenzor);
                                $objSenzori = array();
                                foreach ($arraySenzor as $key) {
                                  $arrayIdAndUmiditate = explode(":",$key);
                                  array_push($arrayIdSenzor,$arrayIdAndUmiditate[0]);
                                  $objSenzori[$arrayIdAndUmiditate[0]]=$arrayIdAndUmiditate[1];
                                }
                              }

                              $query = "SELECT * FROM licenta group by nume";
                              $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                              $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                              foreach($result as $row)
                              {
                                ?>
                                <tr>
                              <th><input type="checkbox" name='lang[]' value="<?php echo $row['idRaspberry']; ?>" <?php if(in_array($row['idRaspberry'],$arrayIdSenzor)){ ?> checked <?php } ?>></th>
                              <th><?php echo $row['nume']; ?></th>
                              <th><?php echo $row['locatie']; ?></th>
                              <th><?php $valMinimSenzor = 10; $valMaximSenzor=100; if(isset($objSenzori[$row['idRaspberry']])) { $arrayMinMax = explode("|",$objSenzori[$row['idRaspberry']]); $valMinimSenzor = $arrayMinMax[0]; $valMaximSenzor = $arrayMinMax[1]; }?>
                              <select name="umidMinima<?php echo $row['idRaspberry']; ?>" class="form-control" style="width:90px">
                                <option<?php if($valMinimSenzor == 10){ ?> selected=""<?php } ?>>10</option>
                                <option<?php if($valMinimSenzor == 20){ ?> selected=""<?php } ?>>20</option>
                                <option<?php if($valMinimSenzor == 30){ ?> selected=""<?php } ?>>30</option>
                                <option<?php if($valMinimSenzor == 40){ ?> selected=""<?php } ?>>40</option>
                                <option<?php if($valMinimSenzor == 50){ ?> selected=""<?php } ?>>50</option>
                                <option<?php if($valMinimSenzor == 60){ ?> selected=""<?php } ?>>60</option>
                                <option<?php if($valMinimSenzor == 70){ ?> selected=""<?php } ?>>70</option>
                                <option<?php if($valMinimSenzor == 80){ ?> selected=""<?php } ?>>80</option>
                                <option<?php if($valMinimSenzor == 90){ ?> selected=""<?php } ?>>90</option>
                                <option<?php if($valMinimSenzor == 100){ ?> selected=""<?php } ?>>100</option>
                              </select></th>
                              <th><select name="umidMaxima<?php echo $row['idRaspberry']; ?>" class="form-control" style="width:90px">
                                <option<?php if($valMaximSenzor == 10){ ?> selected=""<?php } ?>>10</option>
                                <option<?php if($valMaximSenzor == 20){ ?> selected=""<?php } ?>>20</option>
                                <option<?php if($valMaximSenzor == 30){ ?> selected=""<?php } ?>>30</option>
                                <option<?php if($valMaximSenzor == 40){ ?> selected=""<?php } ?>>40</option>
                                <option<?php if($valMaximSenzor == 50){ ?> selected=""<?php } ?>>50</option>
                                <option<?php if($valMaximSenzor == 60){ ?> selected=""<?php } ?>>60</option>
                                <option<?php if($valMaximSenzor == 70){ ?> selected=""<?php } ?>>70</option>
                                <option<?php if($valMaximSenzor == 80){ ?> selected=""<?php } ?>>80</option>
                                <option<?php if($valMaximSenzor == 90){ ?> selected=""<?php } ?>>90</option>
                                <option<?php if($valMaximSenzor == 100){ ?> selected=""<?php } ?>>100</option>
                              </select></th>
                              </tr>
                              <?php
                              }
                              ?>
      										</tbody>
      									</table>
                        <h5 class="card-title mb-0">Preferinte limita umiditate generala</h5>
                        <br>
                      <div class="form-row">
    											<div class="form-group col-md-6">
    												<label for="inputCity">Umiditate minima</label>
                            <select id="umidMinima" name="umidMinima" class="form-control">
                              <option<?php if($valMin == 10){ ?> selected=""<?php } ?>>10</option>
                              <option<?php if($valMin == 20){ ?> selected=""<?php } ?>>20</option>
                              <option<?php if($valMin == 30){ ?> selected=""<?php } ?>>30</option>
                              <option<?php if($valMin == 40){ ?> selected=""<?php } ?>>40</option>
                              <option<?php if($valMin == 50){ ?> selected=""<?php } ?>>50</option>
                              <option<?php if($valMin == 60){ ?> selected=""<?php } ?>>60</option>
                              <option<?php if($valMin == 70){ ?> selected=""<?php } ?>>70</option>
                              <option<?php if($valMin == 80){ ?> selected=""<?php } ?>>80</option>
                              <option<?php if($valMin == 90){ ?> selected=""<?php } ?>>90</option>
                              <option<?php if($valMin == 100){ ?> selected=""<?php } ?>>100</option>
                            </select>
    											</div>
    											<div class="form-group col-md-6">
    												<label for="inputState">Umiditate maxima</label>
    												<select id="umidMaxima" name="umidMaxima" class="form-control">
                              <option<?php if($valMax == 10){ ?> selected=""<?php } ?>>10</option>
                              <option<?php if($valMax == 20){ ?> selected=""<?php } ?>>20</option>
                              <option<?php if($valMax == 30){ ?> selected=""<?php } ?>>30</option>
                              <option<?php if($valMax == 40){ ?> selected=""<?php } ?>>40</option>
                              <option<?php if($valMax == 50){ ?> selected=""<?php } ?>>50</option>
                              <option<?php if($valMax == 60){ ?> selected=""<?php } ?>>60</option>
                              <option<?php if($valMax == 70){ ?> selected=""<?php } ?>>70</option>
                              <option<?php if($valMax == 80){ ?> selected=""<?php } ?>>80</option>
                              <option<?php if($valMax == 90){ ?> selected=""<?php } ?>>90</option>
                              <option<?php if($valMax == 100){ ?> selected=""<?php } ?>>100</option>
                            </select>
    											</div>
    										</div>

    									<hr>

                      <div class="form-group">

    											<label class="custom-control custom-checkbox m-0">
                          <input type="checkbox" id="notificareUmid" name="notificareUmid" class="custom-control-input"<?php if($notificari == 1){ ?> checked<?php } ?>>
                          <span class="custom-control-label">Vreau sa primesc notificari</span>
                          </label>
    									</div>
                      <button name="filtrare" id="filtrare" type="submit" class="btn btn-primary">Seteaza</button>
    								</div>
                    </form>
    							</div>
                  <h1 class="h3 mb-3 mt-5 mx-3">Vizualizare senzori setati</h1>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <table id="datatables-buttons" class="table table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nume</th>
                          <th>Locatie</th>
                          <th>Umiditate minima</th>
                          <th>Umiditate maxima</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php
                  $id = $_SESSION['id'];
                  $sql2 ="SELECT idSenzor FROM login WHERE id = '$id'";
                  $result2 = mysqli_query($conn,$sql2);
                  while($chart2=mysqli_fetch_assoc($result2))
                  {
                  $idSenzor=$chart2['idSenzor'];
                  }
                  $arraySenzor = explode(",",$idSenzor);
                  foreach ($arraySenzor as $k) {
                    $arrayIdAndUmiditate = explode(":",$k);
                    $arrayMinMax = explode("|",$arrayIdAndUmiditate[1]);
                    $sql ="SELECT * FROM licenta WHERE idRaspberry = '$k' order by time desc limit 1";
                    $result = mysqli_query($conn,$sql);
                    while($chart=mysqli_fetch_assoc($result))
                      {
                          ?>
                           <tr>
                         <th><?php echo $chart['idRaspberry']; ?></th>
                         <th><?php echo $chart['nume']; ?></th>
                         <th><?php echo $chart['locatie']; ?></th>
                         <th><?php echo $arrayMinMax[0]; ?>%</th>
                         <th><?php echo $arrayMinMax[1]; ?>%</th>
                         </tr>
                         <?php
                            }
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    </div>
                  </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEF0dzainkDDyxogITmahRlAMRXyg-gVI&callback=initMap&libraries=&v=weekly"async></script>
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
			var worldMapMarkers = [
			];
			var worldMap = new JsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: worldMapMarkers,
				markerStyle: {
					initial: {
						r: 9,
						stroke: window.theme.white,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				regionStyle: {
					initial: {
						fill: window.theme["gray-200"]
					}
				},
				zoomOnScroll: false
			});
			var useMapMarkers = [{
					coords: [37.77, -122.41],
					name: "San Francisco: 375"
				},
				{
					coords: [40.71, -74.00],
					name: "New York: 350"
				},
				{
					coords: [39.09, -94.57],
					name: "Kansas City: 250"
				},
				{
					coords: [36.16, -115.13],
					name: "Las Vegas: 275"
				},
				{
					coords: [32.77, -96.79],
					name: "Dallas: 225"
				}
			];
			var usaMap = new JsVectorMap({
				map: "us_aea_en",
				selector: "#usa_map",
				zoomButtons: true,
				markers: useMapMarkers,
				markerStyle: {
					initial: {
						r: 9,
						stroke: window.theme.white,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				regionStyle: {
					initial: {
						fill: window.theme["gray-200"]
					}
				},
				zoomOnScroll: false
			});
      var worldMap = new JsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: worldMapMarkers,
				markerStyle: {
					initial: {
						r: 9,
						stroke: window.theme.white,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				regionStyle: {
					initial: {
						fill: window.theme["gray-200"]
					}
				},
				zoomOnScroll: false
			});
			var useMapMarkers = [{
					coords: [37.77, -122.41],
					name: "San Francisco: 375"
				},
				{
					coords: [40.71, -74.00],
					name: "New York: 350"
				},
				{
					coords: [39.09, -94.57],
					name: "Kansas City: 250"
				},
				{
					coords: [36.16, -115.13],
					name: "Las Vegas: 275"
				},
				{
					coords: [32.77, -96.79],
					name: "Dallas: 225"
				}
			];
			window.addEventListener("resize", () => {
				worldMap.updateSize();
				usaMap.updateSize();
			});
			setTimeout(function() {
				worldMap.updateSize();
				usaMap.updateSize();
			}, 250);
		});
	</script>


</html>
