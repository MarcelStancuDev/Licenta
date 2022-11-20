<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <?php require_once "dbconfig.php";?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Prezentare | Analytics &amp; More</title>

	<link rel="canonical" href="pages-blank.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
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
</script>
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<div class="main">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 90px;"></img></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Acasa <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts.php">Grafice <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">Tabele <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="maps.php">Harta <span class="sr-only"></span></a>
      </li>
      </ul>
      </div>
      </div>
      </nav>
      <nav class="navbar navbar-expand navbar-light navbar-bg py-2">
      <div class="container">
        <a class="btn">
          Descopera aplicatia!
        </a>
        <a class="btn">
          Solicita informatii!
        </a>
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown" aria-expanded="false">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood"> <span class="text-dark">
                  Utilizator neinregistrat</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Logare</a>
                <a class="dropdown-item" href="register.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart align-middle mr-1"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Inregistrare</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="editareProfil.php">Setari</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </nav>
			<main class="container py-5">
					<h1 class="h3 mb-0">Pagina de prezentare</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
            </ol>
          </nav>
          <div class="row">
						<div class="col-12">
              <div class="card">
    									<div class="card-header" id="headingOne">
    										<h5 class="card-title my-2">
    											<p>Bine ai venit!</p>
    										</h5>
    									</div>
    									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
    										<div class="card-body">
    											Mai jos poti vizualiza cateva optiuni oferite de catre noi: o harta unde sunt afisati senzorii si un tabel ce contine datele analizate astazi!
                          Pentru a experimenta toate optiunile ce le ofera aplicatia, te rugam sa te inregistrezi, sau daca ai deja cont de utilizator, sa te autentifici.
                          In bara de desubtul meniului, in partea dreapta a meniului,vei regasi o imagine, un text ce semnifica neautentificarea dumneavoastra si un meniu ce te va trimite la paginile specifice logarii sau inregistrarii.
    										</div>
    									</div>
    								</div>
                <div class="card  py-4">
                  <div class="card-header">
                    <i class="fa fa-table"></i> Harta tutoror dispozitivelor pe teren</div>
                  <div class="card-body">
                  <div id="map" style="width:100%;height:400px;"></div>
                  <script>
                  var map = L.map('map').setView([45.413190, 28.0300], 9);

                  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                  }).addTo(map);
                  <?php
                    $numeDispozitiv=array();
                    $query = "SELECT nume,coordGPS FROM licenta";
                    $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                    $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($result as $row)
                    {
                      if(in_array($row['nume'],$numeDispozitiv)==false){
                      ?>
                      L.marker([<?php echo explode(",",$row['coordGPS'])[0] ?>,<?php echo explode(",",$row['coordGPS'])[1] ?>]).addTo(map)
                          .bindPopup("<a href='detalii.php?nume=<?php echo $row['nume']?>'><?php echo $row['nume']?>")
                          .openPopup();<?php } array_push($numeDispozitiv,$row['nume']);}?>

                  </script>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Tabel unde se pot regasi date specifice fiecarui dispozitiv analizate in aceasta zi.</h5>
                </div>
                <div class="card-body">
                  <table id="datatables-buttons" class="table table-striped" style="width:100%">
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
                    <tbody>
                      <?php
                        $query = "SELECT id,moisture,time,idRaspberry,nume,coordGPS,locatie FROM licenta WHERE DATE_FORMAT(time,'%Y-%m-%d') = '".date('Y-m-d')."'";
                        $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                        $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                        foreach($result as $row)
                        {
                          ?>
                          <tr>
                        <th><?php echo $row['idRaspberry']; ?></th>
                        <th><?php echo $row['nume']; ?></th>
                        <th><?php echo $row['moisture']; ?>%</th>
                        <th><?php echo $row['time']; ?></th>
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
  <?php require_once "dbconfig.php";?>

</body>
<script src="js/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEF0dzainkDDyxogITmahRlAMRXyg-gVI&callback=initMap&libraries=&v=weekly"async></script>

  <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Datatables with Buttons
        var datatablesButtons = $("#datatables-buttons").DataTable({
          responsive: true,
          lengthChange: !1,
          buttons: ["copy", "csv", "print"]
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
      });
    </script>



</html>
