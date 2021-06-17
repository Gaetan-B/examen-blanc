<?php
include "liste_stagiaires.php";
?>
<style>
    td {
        padding: 1em;
        border: 1px solid black;
    }
</style>
<?php
    //echo "Heelo world!";
    echo "<table>";
    echo "<tr>";
        echo "<td>Sexe</td>";
        echo "<td>Nom</td>";
        echo "<td>Prenom</td>";
    echo "</tr>";
    foreach ($stagiaires as $stagiaire) {
        if ($stagiaire['sexe'] == "M") {
            $sexe = "Mr";
        } 
        else $sexe = "Mme";
        
        echo "<tr>";           
            echo "<td>".$sexe."</td>";
            echo '<td name="nom" style="text-transform:uppercase;">'.$stagiaire["nom"]."</td>";
            echo '<td name="nom" style="text-transform:capitalize;">'.$stagiaire["prenom"]."</td>";
        echo "</tr>";
    
    }
    echo "</table>";