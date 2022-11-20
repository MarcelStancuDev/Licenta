<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

include ('dbconfig.php');
$sql ="SELECT * FROM licenta";
$result = mysqli_query($conn,$sql);
while($chart=mysqli_fetch_assoc($result))
  {
    if(date("Y-m-d") == explode(" ",$chart['time'])[0]){
      $time=explode(" ",$chart['time'])[1];
      $ora=explode(":",$time)[0];
       if($ora<date("H")){?>
         <a href="#" class="list-group-item">
           <div class="row no-gutters align-items-center">
             <div class="col-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle align-middle mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
             </div>
             <div class="col-10">
               <div class="text-dark">Senzor inactiv!</div>
               <div class="text-muted small mt-1">Dispozitiv:<?php echo $chart['nume'] ?></div>
               <div class="text-muted small mt-1"><?php echo "".$chart['time'].""?></div>
             </div>
           </div>
         </a>
  <?php
}
}
}
}
 ?>
