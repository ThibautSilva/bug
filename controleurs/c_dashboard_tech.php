<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Eric
 * Date: 20/02/14
 * Time: 19:17
 * To change this template use File | Settings | File Templates.
 */

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
        $the_bugs = getBugsAssign($_SESSION['login']['id']);
        $bugs = array_merge($the_bugs[0],$the_bugs[1]);
        include("vues/v_dashboard_tech.php");
        break;
    }
    case 'bugclos':{
        if (isset($_POST['note'])){
            $message = closeBug();
            include("vues/v_message.php");
        }
        $idbug = $_REQUEST['idbug'];
        include("vues/v_cloturer.php");
        break;
    }
}
