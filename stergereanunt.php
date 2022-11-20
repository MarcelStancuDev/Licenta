<?php
include ('dbconfig.php');
$id = $_GET['id'];
$sql = "DELETE FROM anunturi WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Succes";
    header("location: admin.php");
    exit;
} else {
    echo "Error deleting record";
}
?>
