<?php 
    include('../controller/control.php'); 
    $get_data = new Data();
    $id = $_GET['id'];
    $data = $get_data->deleteblog($id);
    header('location: about.php');
?>