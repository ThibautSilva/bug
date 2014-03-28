<?php


if(!isset($_REQUEST['action']))
    $action = 'list';
else
    $action = $_REQUEST['action'];

switch($action){
    case 'list':{
        if (isset($_POST['assign'])){
            $message = closeBug();
            include("vues/v_message.php");
        }
        $the_bugs = getAllBugs();
        include("vues/v_dashboard_resp.php");
        break;
    }
    case 'assign':{

        $idbug = $_REQUEST['idbug'];
        //include("vues/v_assigner.php");
        echo "test case assign";
        break;
    }
}