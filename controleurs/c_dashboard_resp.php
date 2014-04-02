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

        if (isset($_POST['prio'])){
            $message = updatePrio();
            include('vues/v_message.php');
        }

        $bugs = getAllBugs();
        $nbouvert = count($bugs[0]);
        $nbclos = count($bugs[1]);
        $nbnonassigne =0;
        foreach ($bugs[0] as $bug) {
            if ($bug->getEngineer() == null){
                $nbnonassigne++;
            }
        }
        $the_bugs = array_merge($bugs[0],$bugs[1]);
        $the_products = getAllProducts();
        $the_techs = getAllTech();

        include("vues/v_dashboard_resp.php");
        break;
    }
    case 'suppr':{
        $message = deletBug();
        include('vues/v_message.php');

        $bugs = getAllBugs();
        $nbouvert = count($bugs[0]);
        $nbclos = count($bugs[1]);
        $nbnonassigne =0;
        foreach ($bugs[0] as $bug) {
            if ($bug->getEngineer() == null){
                $nbnonassigne++;
            }
        }
        $the_bugs = array_merge($bugs[0],$bugs[1]);
        $the_products = getAllProducts();
        $the_techs = getAllTech();

        include("vues/v_dashboard_resp.php");
    }
}