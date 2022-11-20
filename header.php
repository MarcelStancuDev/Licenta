<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
<a class="navbar-brand" href="home.php"><img src="img/logo.png" style="border: 1px solid #ddd;
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
<?php if($_SESSION["username"] == 'admin') : ?>
  <li class="nav-item active">
    <a class="nav-link" href="admin.php">Admin <span class="sr-only"></span></a>
  </li>
<?php endif;?>
</ul>
<div class="d-flex align-items-center">
<div class="nav-item dropdown">
<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
  <div class="position-relative">
    <i class="align-middle mr-2 fas fa-fw fa-bell" id="bell"></i>
  </div>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
  <div class="dropdown-menu-header">
    Notificari
  </div>
  <div class="list-group" id="notifications">
  </div>
  <div class="dropdown-menu-footer">
    <a href="#" class="text-muted">Show all notifications</a>
  </div>
</div>
</div>
<form class="d-none d-sm-inline-block my-0 py-0" action="search.php" method="GET">
<div class="input-group input-group-navbar">
  <input type="text" name="query" class="form-control bg-white" placeholder="Cauta dispozitiv..." aria-label="Search">
  <div class="input-group-append">
    <button class="btn bg-white"type="submit">
      <i class="align-middle"  data-feather="search"></i>
    </button>
  </div>
</div>
</form>
</div>
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
            <?php
          $sql ="SELECT * FROM login";
          $result = mysqli_query($conn,$sql);
            while($chart=mysqli_fetch_assoc($result))
            {
              if($chart['username']==$_SESSION['username']){?>
              <?php echo $chart['numeFam'] ?> <?php echo $chart['prenume'] ?>
            <?php
          }}
          ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="profil.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
          <a class="dropdown-item" href="charts.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart align-middle mr-1"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Grafice</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="editareProfil.php">Setari</a>
          <a class="dropdown-item" href="logout.php">Delogare</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

<script>
  var notifications = document.getElementById("notifications");//Se ia elementul ce contine numele notifications si se atribuie variabilei
  var bell=document.getElementById("bell");//Se ia elementul ce contine numele bell si se atribuie variabilei
  function getNotification(){//Deschidere functie
    bell.className="align-middle mr-2 fas fa-fw fa-bell";//Clasa bell din codul HTML
    var xhttpNotification = new XMLHttpRequest();//Variabila
    notifications.innerHTML="";
    xhttpNotification.addEventListener('load', function(e) {//Adaugare eveniment
    var responsive=JSON.parse(this.responseText);//Parcurgere JSON primit
    for(var i=0;i<responsive.length;i++){

      if(responsive[i].umiditate<responsive[i].umiditateMinima){//Daca raspunsul primit este mai mic decat umiditatea minima se afiseaza notificare umiditate scazuta
    notifications.innerHTML += '<a href="#" class="list-group-item"><div class="row no-gutters align-items-center"><div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle align-middle mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div><div class="col-10"><div class="text-dark">Umiditate scazuta!</div><div class="text-muted small mt-1">Dispozitiv: '+ responsive[i].nume+' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle mr-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' + responsive[i].umiditate+'%</div><div class="text-muted small mt-1">Limite setate: '+ responsive[i].umiditateMinima+' - '+ responsive[i].umiditateMaxima+' </div><div class="text-muted small mt-1">'+responsive[i].time+'</div></div></div></a>';


      bell.classList.add("text-primary");//Activare clopotel

  }
   if(responsive[i].umiditate>responsive[i].umiditateMaxima){//Daca raspunsul primit este mai mic decat umiditatea maxima se afiseaza notificare umiditate ridicata
        notifications.innerHTML += '<a href="#" class="list-group-item"><div class="row no-gutters align-items-center"><div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle align-middle mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div><div class="col-10"><div class="text-dark">Umiditate crescuta!</div><div class="text-muted small mt-1">Dispozitiv: '+ responsive[i].nume+' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle mr-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' + responsive[i].umiditate+'%</div><div class="text-muted small mt-1">Limite setate: '+ responsive[i].umiditateMinima+' - '+ responsive[i].umiditateMaxima+' </div><div class="text-muted small mt-1">'+responsive[i].time+'</div></div></div></a>';


          bell.classList.add("text-primary");//Activare clopotel

      }
      var d = new Date();//Variabila data curenta
    if(responsive[i].activSenzor == "inactiv"){//Daca senzorul este declarat inactiv se afiseaza notificare
      notifications.innerHTML += '<a href="#" class="list-group-item"><div class="row no-gutters align-items-center"><div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle align-middle mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div><div class="col-10"><div class="text-dark">Dispozitiv inactiv!</div><div class="text-muted small mt-1">Dispozitiv: '+ responsive[i].nume+' </div><div class="text-muted small mt-1">'+responsive[i].time+'</div></div></div></a>';


        bell.classList.add("text-primary");//Activare clopotel

    }
  }
    }, false);

    xhttpNotification.open('POST', "notifications.php");//Se primesc datele prin metoda POST
    xhttpNotification.send();
  }

 function notificationInterval(){
  setInterval(function () {
  getNotification()
}, 5000);
 }
 notificationInterval();
</script>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M470.7 9.4c3 3.1 5.3 6.6 6.9 10.3s2.4 7.8 2.4 12.2l0 .1v0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3L310.6 214.6c-11.8 11.8-30.8 12.6-43.5 1.7L176 138.1 84.8 216.3c-13.4 11.5-33.6 9.9-45.1-3.5s-9.9-33.6 3.5-45.1l112-96c12-10.3 29.7-10.3 41.7 0l89.5 76.7L370.7 64H352c-17.7 0-32-14.3-32-32s14.3-32 32-32h96 0c8.8 0 16.8 3.6 22.6 9.3l.1 .1zM0 304c0-26.5 21.5-48 48-48H464c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V304zM48 416v48H96c0-26.5-21.5-48-48-48zM96 304H48v48c26.5 0 48-21.5 48-48zM464 416c-26.5 0-48 21.5-48 48h48V416zM416 304c0 26.5 21.5 48 48 48V304H416zm-96 80c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z"/></svg>
