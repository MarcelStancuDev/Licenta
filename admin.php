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
  <meta http-equiv="refresh" content="30">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Admin | Analytics &amp; More</title>

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
					<h1 class="h3 mb-0">Administrare</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
              <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
              <li class="breadcrumb-item">Administrare</li>
            </ol>
          </nav>
          <?php
          $query1 = "SELECT id FROM licenta";
          $result1 = mysqli_query($conn,$query1) or die("Select Query Failed.");
          $count1 = mysqli_num_rows($result1);
          ?>
          <?php
          $query2 = "SELECT id FROM licenta group by nume";
          $result2 = mysqli_query($conn,$query2) or die("Select Query Failed.");
          $count2 = mysqli_num_rows($result2);
           ?>
           <?php
           $query3 = "SELECT id FROM login";
           $result3 = mysqli_query($conn,$query3) or die("Select Query Failed.");
           $count3 = mysqli_num_rows($result3);
            ?>
          <div class="row">
          						<div class="col-md-6 col-xxl-3 d-flex">
          							<div class="card flex-fill">
          								<div class="card-body">
          									<div class="row">
          										<div class="col mt-0">
          											<h5 class="card-title">Utilizatori inregistrati</h5>
          										</div>

          										<div class="col-auto">
          											<div class="stat stat-sm">
          												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          											</div>
          										</div>
          									</div>
          									<span class="h1 d-inline-block mt-1 mb-3"><?php echo $count3 ?></span>
          									<div class="mb-0">
          										<span class="badge badge-soft-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> 6.25% </span>
          										<span class="text-muted">Since last week</span>
          									</div>
          								</div>
          							</div>
          						</div>
          						<div class="col-md-6 col-xxl-3 d-flex">
          							<div class="card flex-fill">
          								<div class="card-body">
          									<div class="row">
          										<div class="col mt-0">
          											<h5 class="card-title">Dispozitive</h5>
          										</div>

          										<div class="col-auto">
          											<div class="stat stat-sm">
          												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thermometer align-middle mr-2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>
                                </div>
          										</div>
          									</div>
          									<span class="h1 d-inline-block mt-1 mb-3"><?php echo $count2; ?></span>
          									<div class="mb-0">
          										<span class="badge badge-soft-danger mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> -4.65% </span>
          										<span class="text-muted">Since last week</span>
          									</div>
          								</div>
          							</div>
          						</div>
          						<div class="col-md-6 col-xxl-3 d-flex">
          							<div class="card flex-fill">
          								<div class="card-body">
          									<div class="row">
          										<div class="col mt-0">
          											<h5 class="card-title">Date analizate</h5>
          										</div>

          										<div class="col-auto">
          											<div class="stat stat-sm">
          												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity align-middle"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
          											</div>
          										</div>
          									</div>
          									<span class="h1 d-inline-block mt-1 mb-3"><?php echo $count1 ?></span>
          									<div class="mb-0">
          										<span class="badge badge-soft-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
          										<span class="text-muted">Since last week</span>
          									</div>
          								</div>
          							</div>
          						</div>
          						<div class="col-md-6 col-xxl-3 d-flex">
          							<div class="card illustration flex-fill">
          								<div class="card-body p-0 d-flex flex-fill">
          									<div class="row no-gutters w-100">
          										<div class="col-6">
          											<div class="illustration-text p-3 m-1">
          												<h4 class="illustration-text">Bine ai revenit, Admin!</h4>
          												<p class="mb-0">Analytics &amp; More</p>
          											</div>
          										</div>
          										<div class="col-6 align-self-end text-right">
          											<img src="img/illustrations/social.png" alt="Social" class="img-fluid illustration-img">
          										</div>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>
                    <?php
                    if(isset($_POST['insert'])) {
                    $numeDispozitiv=$_POST['numeDispozitiv'];
                    $coordonateGPS=$_POST['coordonateGPS'];
                    $locatie=$_POST['locatie'];
                    $query = "INSERT INTO `raspberry`(nume, coordGPS,locatie) VALUES('$numeDispozitiv', '$coordonateGPS','$locatie')";
                    $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                    if($result){
                        echo "Dispozitiv adaugat cu succes! Te rugam sa adaugi date pentru a-l putea vizualiza!";
                    }else{
                        echo "Eroare la adaugare dispozitiv!";
                    }
                  }
                    ?>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Adauga dispozitiv Raspberry Pi</h5>
        </div>
        <div class="card-body">
          <form>
           <div class="form-group">
          	<label class="form-label">Nume</label>
          	<input type="text" id="numeDispozitiv" name="numeDispozitiv" class="form-control" placeholder="Nume">
          </div>
          <div class="form-group">
            <label class="form-label">Coordonate GPS</label>
          	<textarea class="form-control" id="coordonateGPS" name="coordonateGPS" placeholder="Lat:0.00,Long:0,00" rows="3"></textarea>
          </div>
          <div class="form-group">
           <label class="form-label">Locatie</label>
           <input type="text" id="locatie" name="locatie" class="form-control" placeholder="Oras">
         </div>
           <button type="submit" name="insert" id="insert"class="btn btn-primary">Adauga</button>
          </form>
        </div>
       </div>
     </form>

     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h5 class="card-title">Tabel unde se pot gasi toate dispozitivele de pe teren, coordonatele acestora, data crearii cat si locatia.</h5>
           </div>
           <div class="card-body">
             <table id="datatables-buttons3" class="table table-striped" style="width:100%">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Nume</th>
                   <th>Coordonate GPS</th>
                   <th>Data creare</th>
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
     if(isset($_POST['adaugaAnunt'])) {
     $tipAnunt=$_POST['tipAnunt'];
     $descriereAnunt=$_POST['descriereAnunt'];
     $query = "INSERT INTO `anunturi`(tipAnunt, descriere) VALUES('$tipAnunt', '$descriereAnunt')";
     $result = mysqli_query($conn,$query) or die("Select Query Failed.");
     if($result){
         echo "Anunt adaugat cu succes!";
     }else{
         echo "Eroare la adaugare anunt!";
     }
   }
     ?>
     <form method = "post" action = "<?php $_PHP_SELF ?>">
       <div class="card">
         <div class="card-header">
           <h5 class="card-title">Adauga anunt</h5>
         </div>
         <div class="card-body">
           <form>
            <div class="form-group">
           	<label class="form-label">Tip anunt</label>
           	<input type="text" id="tipAnunt" name="tipAnunt" class="form-control" placeholder="Anunt...">
           </div>
           <div class="form-group">
             <label class="form-label">Descriere</label>
           	<textarea class="form-control" id="descriereAnunt" name="descriereAnunt" placeholder="Adauga descriere" rows="3"></textarea>
           </div>
            <button type="submit" name="adaugaAnunt" id="adaugaAnunt"class="btn btn-primary">Adauga</button>
           </form>
         </div>
        </div>
      </form>
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
              <strong><?php echo $row['tipAnunt']; ?></strong> <?php if($_SESSION["username"] == 'admin') : ?> <th><a href='stergereanunt.php?id=<?php echo $row['id']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete align-middle mr-2"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg></a><?php endif;?>
              <span class="float-right text-muted text-sm"><?php echo date_format($date, 'g:ia \o\n l jS F Y');; ?></span>
              <p><?php echo $row['descriere']; ?></p>
            </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
          <div class="card flex-fill">
 						<div class="card-header">
 							<h5 class="card-title mb-0">Utilizatori</h5>
 						</div>
            <div class="card-body">
              <table id="datatables-buttons2" class="table table-responsive table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>Nume de utilizator</th>
                  <th>Email</th>
                  <th>Creat la</th>
                  <th>Nume</th>
                  <th>Prenume</th>
                  <th>Adresa</th>
                  <th>Oras</th>
                  <th>ZIP</th>
                  <th>Status activitate</th>
                  <th>Status</th>
                  <th>Actiune</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM login";
                  $result = mysqli_query($conn,$query) or die("Select Query Failed.");
                  $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
                  foreach($result as $row)
                  {
                    ?>
                    <tr>
                  <th><?php echo $row['username']; ?></th>
                  <th><?php echo $row['email']; ?></th>
                  <th><?php echo $row['created_at']; ?></th>
                  <th><?php echo $row['numeFam'] ?></th>
                  <th><?php echo $row['prenume'] ?></th>
                  <th><?php echo $row['adresa'] ?></th>
                  <th><?php echo $row['oras'] ?></th>
                  <th><?php echo $row['zip'] ?></th>
                  <?php if($row['statusLogare']=='Activ'){ ?>
                  <th><span class="badge badge-success"><?php echo $row['statusLogare']; ?></span></th>
                  <?php }else{?>
                  <th><span class="badge badge-danger"><?php echo $row['statusLogare']; ?></span></th>
                    <?php } ?>
                  <?php if($row['status']=='Acceptat' && $row['username']!='admin'){ ?>
                  <th><span class="badge badge-success"><?php echo $row['status']; ?></span></th>
                    <th><a href='dezactivarepag.php?username=<?php echo $row['username']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus align-middle mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg></a></th>
                    <th><a href='delpage.php?id=<?php echo $row['id']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x align-middle mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg></a></th>
                  <?php }if($row['status']!='Acceptat' && $row['username']!='admin'){?>
                  <th><span class="badge badge-warning"><?php echo $row['status']; ?></span></th>
                  <th><a href='addpage.php?username=<?php echo $row['username']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check align-middle mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg></a></th>
                  <th><a href='dezactivarepag.php?username=<?php echo $row['username']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus align-middle mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg></a></th>
                  <th><a href='delpage.php?id=<?php echo $row['id']?>'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x align-middle mr-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg></a></th>
                <?php } if($row['username']=='admin'){?>
                  <th><span class="badge badge-success"><?php echo $row['status']; ?></span></th>
                <?php
              } ?>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
 						</table>
          </div>
      </div>

          <h1 class="h3 mb-3 mt-5 mx-3">Tabel senzori declarati inactivi</h1>
          <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
                  <table id="datatables-buttons" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Nume</th>
                  <th>Locatie</th>
                  <th>Ultima data analizata</th>
                  <th>Umiditate</th>
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
          $arrayIdSenzor=explode(",",$idSenzor);
          foreach ($arrayIdSenzor as $k) {
          $sql ="SELECT * FROM licenta WHERE idRaspberry = '$k' order by time desc limit 1";
          $result = mysqli_query($conn,$sql);
          while($chart=mysqli_fetch_assoc($result))
            {
              if(date("Y-m-d") == explode(" ",$chart['time'])[0]){
                $time=explode(" ",$chart['time'])[1];
                $statusSenzor = "activ";
                $ora=explode(":",$time)[0];
                if(date("H") > $ora+1){
                  $statusSenzor = "inactiv";
                  ?>
                   <tr>
                 <th><?php echo $chart['nume']; ?></th>
                 <th><?php echo $chart['locatie']; ?></th>
                 <th><?php echo $chart['time']; ?></th>
                 <th><?php echo $chart['moisture']; ?>%</th>
                 </tr>
                 <?php
               }
              }
             }
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
			// Datatables with Buttons
			var datatablesButtons2 = $("#datatables-buttons2").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons2.buttons().container().appendTo("#datatables-buttons2_wrapper .col-md-6:eq(0)");
		});
	</script>
  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons3 = $("#datatables-buttons3").DataTable({
				responsive: true,
				lengthChange: !0,
				buttons: ["copy","csv", "print"]
			});
			datatablesButtons3.buttons().container().appendTo("#datatables-buttons3_wrapper .col-md-6:eq(0)");
		});
	</script>

  <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
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
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
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
</html>
