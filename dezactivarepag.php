<?php

    include ('dbconfig.php');
$sql = "UPDATE login SET status='Dezactivat' WHERE username='".$_GET['username']."'";

if (mysqli_query($conn, $sql)) {
    echo "Succes";
    header("location: admin.php");
    exit;
} else {
    echo("Error description: " . mysqli_error($conn));
}

?>
