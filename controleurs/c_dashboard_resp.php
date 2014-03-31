<?php


if(!isset($_REQUEST['action']))
    $action = 'list';
else
    $action = $_REQUEST['action'];

switch($action){
    case 'list':{
        if (isset($_POST['note'])){
            $message = closeBug();
            include("vues/v_message.php");
        }

        if (isset($_POST['objet'])){
            $message = ajouterNewBug();
            include("vues/v_message.php");
        }

        if (isset($_POST['engineer'])){
            $message = updateAssign();
            include('vues/v_message.php');
        }

        $the_bugs = getAllBugs();
        $the_products = getAllProducts();
        $the_techs = getAllTech();

        include("vues/v_dashboard_resp.php");
        break;
    }
}