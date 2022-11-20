<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php include "dbconfig.php";?>
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
      if($_GET['status']=="nume"){
        $nume=$_GET['numeD'];
      $query = "SELECT * FROM licenta WHERE nume='".$nume."'";


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
    }
      ?>
      <?php

        if($_GET['status']=="umiditate"){
          $umidMin=$_GET['umiditateMin'];
          $umidMax=$_GET['umiditateMax'];
        $query = "SELECT * FROM licenta WHERE moisture BETWEEN '".$umidMin."' AND '".$umidMax."'" ;


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
      }
        ?>
        <?php
          if($_GET['status']=="perioada"){
            $perMin=$_GET['perioadaMin'];
            $perMax=$_GET['perioadaMax'];
            $query = "SELECT id,moisture,time,idRaspberry,nume,coordGPS,locatie FROM licenta WHERE date(time) BETWEEN '".$perMin."' AND '".$perMax."'";

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
          }
          ?>
  </tbody>
</table>
