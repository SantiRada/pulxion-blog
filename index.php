<?php
    require 'config/config.php';

    $section = $_GET["section"] ?? "home";

    include('modules/header.php');
    
    include('modules/'.$section.'.php');

    include('modules/footer.php');

?>