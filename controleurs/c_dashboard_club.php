<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Eric
 * Date: 20/02/14
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */

if(!isset($_REQUEST['action']))
    $action = 'list';
else
    $action = $_REQUEST['action'];

switch($action){
    case 'list':{
        if (isset($_POST['objet'])){
            $message = ajouterNewBug();
            include("vues/v_message.php");
        }
        $the_bugs = getBugsOpenByUser($_SESSION['login']['id']);
        $nbouvert = count($the_bugs[0]);
        $nbclos = count($the_bugs[1]);
        $bugs = array_merge($the_bugs[0],$the_bugs[1]);
        $the_products = getAllProducts();
        include("vues/v_dashboard_club.php");
        break;
    }
}
