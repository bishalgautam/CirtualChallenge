<?php
require_once('../private/initialize.php');

var_dump($_POST);
//echo "Called Script";
if(isset($_POST['id']) && isset($_POST['state'])){
    $uid = $_POST['id'];
    $state = $_POST['state'];
    $uid = intval($uid);
    $state = ltrim($state);
    $state = rtrim($state);
    update_customers($uid, $state);
    // Do whatever you want with the $uid
}

?>