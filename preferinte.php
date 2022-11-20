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

	<title>Preferinte | Analytics &amp; More</title>

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
</script>
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<div class="main">
      <?php include("header.php"); ?>
			<main class="container py-5">
					<h1 class="h3 mb-0">Profil</h1>
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb px-0 my-0" style="background-color: #f7f9fc" >
               <li class="breadcrumb-item"><a href="home.php">Acasa</a></li>
               <li class="breadcrumb-item">Profil</li>
            </ol>
          </nav>
          <div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
                <div class="card-header">
									<h5 class="card-title mb-0">Detalii Profil</h5>
								</div>
								<div class="card-body text-center">
									<i class="align-middle mr-2 fas fa-fw fa-user-circle fa-9x" ></i>
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

						<div class="col-md-8 col-xl-9">
              <div class="card">
								<div class="card-header">
									<div class="card-actions float-right">
									</div>
									<h5 class="card-title mb-0">Preferinte limita umiditate</h5>
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

                    $sql = "UPDATE login SET umiditateMinima='$umiditateMinima',umiditateMaxima = '$umiditateMaxima',notificari='$checkNotification' WHERE id = '$id'" ;
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
              }}
              ?>
								<div class="card-body">
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
								&copy; 2021 - <a href="home.php" class="text-muted">AppStack</a>
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
			$("#datetimepicker-dashboard").datetimepicker({
				inline: true,
				sideBySide: false,
				format: "L"
			});
		});
	</script>



</html>
