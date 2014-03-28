
<div id="liste_tickets">
    <h2>Tickets assigné en cours</h2>

    <?php
    foreach ($bugs_en_cours as $bug) {
        echo "<ul>";
        echo "<li><img src='./images/en_cours.png' width='30px' height='30px'/></li>";
        echo "<li>".$bug->getCreated()->format('d.m.Y')."</li>";
        echo "<li> Produit(s) : ";
        foreach ($bug->getProducts() as $product) {
            echo "- ".$product->getName()." ";
        }
        echo "</li>";
        echo "<li>".$bug->getDescription()."</li>";
        if($bug->getStatus() == "Ouvert"){
            echo "<li><a href='index.php?uc=dash&action=bugclos&idbug=".$bug->getId()."'>Cloturer le bug</a>";
        }
        echo "</ul>";
    }
    ?>
</div>

<div id="liste_tickets">
    <h2>Tickets assigné fermés</h2>
    <?php
    foreach ($bugs_fermes as $bug) {
        if ($bug->getEngineer() != null){
            $engineer = $bug->getEngineer()->getName();
        }else{
            $engineer = "non affecté";
        }
        echo "<ul>";
        echo "<li><img src='./images/ferme.png' width='30px' height='30px'/></li>";
        echo "<li>".$bug->getCreated()->format('d.m.Y')."</li>";
        echo "<li> affecté à : ".$engineer."</li>";
        echo "<li> Produit(s) : ";
        foreach ($bug->getProducts() as $product) {
            echo "- ".$product->getName()." ";
        }
        echo "</li>";
        echo "<li>".$bug->getDescription()."</li>";
        echo "</ul>";
    }
    ?>
</div>

<div id="popup1" class="popup_block"></div>
</br>
<div id="divTicketsGrid">
    <table cellpadding="7" id="tblTickets" style="width:100%" class="horizseparated outerroundedbox">
        <tr class="nobold" style="white-space:nowrap;">
            <th style="width:100%"><a onclick=''>Titre</a></th>
            <th><a onclick=''>Produit(s)</a></th>
            <th><a onclick=''>Priorité</a></th>
            <th><a onclick=''>Statut</a></th>
            <th><a onclick=''>Date</a></th>
            <th><a onclick=''>Description</a></th>
            <th></th>
        </tr>
        <tr class="ticketRow" id="ticketRow1118616">
            <td onclick="">
                <div class="grey2 ticketrowMeta"><br />
                    <span>#1118616</span>
                </div>
                <a class="ticketLink" onclick="TicketHrefClick(event)" href="Bug/1118616">Bug de la souris</a>
                <div class="grey2 ticketAttr">
                    <img src="usericon.gif" alt="" /><a class="grey2 uPopup">Par : Engineer User</a>
                </div>
            </td>
            <td class="grey">Souris </br> PC 12</td>
            <td class="grey priorityTd">
                <span style="color:green;">Normal</span>
            </td>
            <td class="grey">Ouvert</td>
            <td class="grey date" style="white-space:nowrap">3/28/2014</td>
            <td class="grey date" style="white-space:nowrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum iaculis justo a semper. Nulla commodo ligula at blandit dignissim. Ut volutpat sem velit, non gravida mi placerat eget.</td>
            <td class="grey"><a href="#" data-width="500" data-id="128" data-rel="popup1" class="poplight">Clore</a>
        </tr>
        <tfoot>
        <tr class="sortbottom">
            <td class="grey tablefooter" colspan="8"></td>
        </tr>
        </tfoot>
    </table>
</div>
<script type="text/javascript">
    jQuery(function($){
        modal();
    });
</script>