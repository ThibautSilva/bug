<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sulivan
 * Date: 28/03/14
 * Time: 14:10
 * To change this template use File | Settings | File Templates.
 */

if(!isset($_REQUEST['action']))
    $action = 'list';
else
    $action = $_REQUEST['action'];

switch($action){
    case 'list':{
        $the_bugs = getAllBugs();
        $bugs_en_cours = $the_bugs[0];
        $bugs_fermes =  $the_bugs[1];
        include("vues/v_dashboard_resp.php");
        break;
    }
    case 'assign':{
        if (isset($_POST['note'])){
            $message = closeBug();
            include("vues/v_message.php");
        }
        $idbug = $_REQUEST['idbug'];
        include("vues/v_cloturer.php");
        break;
    }
}
