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
        <?php
        foreach ($bugs_en_cours as $bug) {
            $bug->getCreated();
            echo "<tr class='ticketRow'><td onclick=''><div class='grey2 ticketrowMeta'><br /><span>".$bug->getId()."</span></div>";
            echo $bug->getResume()."<div class='grey2 ticketAttr'><img src='./images/usericon.gif' alt='' />Par : ".$bug->getReporter()->getName()."</div>";
            echo "</td><td class='grey'>";
            foreach ($bug->getProducts() as $product) {
                echo "- ".$product->getName()."</br>";
            }
            echo "</td> <td class='grey priorityTd'><span style='color:green;'>Normal</span></td><td class='grey'>".$bug->getStatus();
            echo "</td><td class='grey date' style='white-space:nowrap'>".$bug->getCreated()->format('d.m.Y')."</td><td class='grey date' style='white-space:nowrap'>";
            echo $bug->getDescription()."</td>";
            if($bug->getStatus() == "Ouvert"){
                echo "<td class='grey'><a href='#' data-width='500' data-id='".$bug->getId()."' data-rel='popup1' class='poplight'>Clore</a>";
            }
            echo "</ul>";
        }
        ?>
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