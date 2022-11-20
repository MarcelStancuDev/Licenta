<?php
// Initialize the session
session_start();
 require_once "dbconfig.php";
// Unset all of the session variables
 // $_SESSION = array();
$id=$_SESSION['id'];

$sql = "UPDATE login SET statusLogare='Inactiv' WHERE id=$id";
if(mysqli_query($conn, $sql)){
    $_SESSION = array();
    session_destroy();
    header("location: login.php");
    exit;
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Destroy the session.
//session_destroy();
// Redirect to login page

//header("location: login.php");
exit;
?>
