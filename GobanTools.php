<?php

function displayGoban($size) { // Cette fonction ne prend qu'un argument, le nombre de case d'un bord du goban.
    echo '<table>';
    for ($i=0; $i < $size ; $i++) {  // Première boucle, va créer un nombre de lignes égal à $size
        echo '<tr>';
        for ($y=0; $y < $size; $y++) {  // Une deuxième boucle qui pour chaque ligne, fait un nombre équivalent de cellules

            /*
            Ici, le but va être de différencier les cases des bords et des coins pour les afficher différment.
            Dans un premier temps, on peut mettre:
            echo '<td class="container"><div class="center"></div></td>';  // que des cases centrales
            */

            if ($y == 0 && $i == 0) {
                echo '<td class="container"><div class="top left"></div></td>';  
            }
            elseif ($y == $size - 1 && $i == 0) {
                echo '<td class="container"><div class="top right"></div></td>';
            }
            elseif ($i == 0) {
                echo '<td class="container"><div class="top"></div></td>';
            }
            elseif ($y == 0 && $i == $size -1) {
                echo '<td class="container"><div class="bottom left"></div></td>';
            }
            elseif ($y == $size - 1 && $i == $size -1) {
                echo '<td class="container"><div class="bottom right"></div></td>';
            }
            elseif ($i == $size -1) {
                echo '<td class="container"><div class="bottom"></div></td>';
            }
            elseif ($y == 0) {
                echo '<td class="container"><div class="left"></div></td>';
            }
            elseif ($y == $size - 1) {
                echo '<td class="container"><div class="right"></div></td>';
            }
            else {
                echo '<td class="container"><div class="center"></div></td>';
            }
            
        }
        echo '</tr>';
    }
}