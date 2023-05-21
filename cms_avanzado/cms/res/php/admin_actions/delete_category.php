<?php
    require '../Functions.php';
    $obj = new Admin_Actions();

    $delete = $obj-> deleteCategory($_POST['category_Id']);

    echo $delete;

?>