<?php
    // LOCAL
    $host = "localhost";
    $user = "sttlets.admin";
    $password = "admin";
    $database = "web";

    // PRODUCTION
    // $host = "localhost";
    // $user = "ujiyuzll_sttletsadmin";
    // $password = "sttletsadmin";
    // $database = "ujiyuzll_web";

    $connection = new mysqli($host, $user, $password, $database);
?>