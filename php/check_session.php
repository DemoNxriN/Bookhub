<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    echo json_encode(array("loggedin" => true));
} else {
    echo json_encode(array("loggedin" => false));
}
?>
