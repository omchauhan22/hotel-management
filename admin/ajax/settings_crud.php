<?php 

require('../includes/db_config.php');
require('../includes/essentials.php');+adminLogin();

if(isset($_POST['get_general'])){
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($frm_data['site_title']) && isset($frm_data['site_about'])) {
    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
} else {
    echo 'Missing POST data';
}

?>