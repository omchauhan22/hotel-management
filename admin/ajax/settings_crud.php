<?php

require('../includes/db_config.php');
require('../includes/essentials.php');
adminLogin();

header('Content-Type: application/json'); // Set response header to JSON

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");

    if ($res && mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_assoc($res);
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Failed to fetch data']);
    }
    exit;
}

if (isset($_POST['site_title']) && isset($_POST['site_about'])) {
    $site_title = $_POST['site_title'];
    $site_about = $_POST['site_about'];

    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$site_title, $site_about, 1];
    $res = update($q, $values, 'ssi');

    if ($res) {
        echo json_encode(['status' => 1, 'message' => 'Update successful']);
    } else {
        echo json_encode(['status' => 0, 'message' => 'No changes made!']);
    }
    exit;
}

if (isset($_POST['upd_shutdown'])) {
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}

if (isset($_POST['get_contacts'])){
    $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}