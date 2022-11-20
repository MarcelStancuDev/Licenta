<?php
session_start(); // Pornire sesiune
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){ // Daca este logat

include ('dbconfig.php'); // Include fisierul de conectare la baza de date
$id = $_SESSION['id']; //Salvare id sesiune intr-o variabila
$umiditateMin=20; //Umiditatea minima implicita
$umiditateMax=80;//Umiditatea maxima implicita
$sql2 ="SELECT umiditateMinima,umiditateMaxima,idSenzor FROM login WHERE id = '$id'"; //Interogare baza de date
$result2 = mysqli_query($conn,$sql2);//Conectarea si realizarea interogarii
while($chart2=mysqli_fetch_assoc($result2))
{
$umiditateMin=$chart2['umiditateMinima'];//Variabila umiditatea minima
$umiditateMax=$chart2['umiditateMaxima'];//Variabila umiditatea maxima
$idSenzor=$chart2['idSenzor'];//variabila id senzor
}
$allSensors=array();//Sir senzori
//$arrayIdSenzor=explode(",",$idSenzor);
$arraySenzor = explode(",",$idSenzor);//Taie din variabila idSenzor dupa virgula

foreach ($arraySenzor as $k) {//Pentru fiecare variabila arraySenzor in k
  $arrayIdAndUmiditate = explode(":",$k);//Pune in sir valoarea ce iese in urma taierii din variabila k dupa :
  $arrayMinMax = explode("|",$arrayIdAndUmiditate[1]);//Pune in sir a doua valoare ce iese in urma taierii din variabila arrayIdAndUmiditate dupa |
  $sql ="SELECT * FROM licenta WHERE idRaspberry = '$k' order by time desc limit 1";//Interogare baza de date
  $result = mysqli_query($conn,$sql);//Realizarea interogarii
  while($chart=mysqli_fetch_assoc($result))
    {
      if(date("Y-m-d") == explode(" ",$chart['time'])[0]){//Daca data de azi e egala cu variabila taiata din baza de date
        $time=explode(" ",$chart['time'])[1];//Variabila time egala cu rezultatul taierii variabilei din baza de date
        $statusSenzor = "activ";//Se face senzorul activ
        $ora=explode(":",$time)[0];//Se ia ora prin taierea variabilei timp din baza de date
        if(date("H") > $ora+1){//Daca a trecut de data curect cu o ora
          $statusSenzor = "inactiv";//Senzorul e declarat inactiv
        }//Valoare ce e transmisa
           $umiditateVal=array('time'=>$chart['time'],'nume'=>$chart['nume'],'umiditateMinima'=>$arrayMinMax[0],'umiditateMaxima'=>$arrayMinMax[1],'umiditate'=>$chart['moisture'],'activSenzor'=>$statusSenzor);
           array_push($allSensors,$umiditateVal);//Se pune in sir
       }
     }
}
   $encode=json_encode($allSensors); echo $encode;//Se codifica in cod json pentru a fi trimise si se afiseaza in consola.
}

 ?>
