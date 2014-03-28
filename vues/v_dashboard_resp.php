
<div id="liste_tickets">
    <h2>Tickets </h2>

    <?php
    foreach ($the_bugs as $bug) {
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
            echo "<li><a href='index.php?uc=dash&action=list&idbug=".$bug->getId()."'> Assigner le bug</a>";
        }
        echo "</ul>";
    }
    ?>
</div>