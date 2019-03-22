<?php

function displayGoban($game) {  // Cette fonction ne prend qu'un argument, un tableau bidimentionnel qui repréésente une partie
    echo "<table>";
    foreach ($game as $rowKey => $rowValue) {  // Première boucle, va créer un nombre de lignes égal à $size
        echo '<tr>';
        $size = count($game) - 1;
        foreach ($rowValue as $columnKey => $columnValue) {  // Une deuxième boucle qui pour chaque ligne, fait un nombre équivalent de cellules

            /*
            Ici, le but va être de différencier les cases des bords et des coins pour les afficher différment.
            Dans un premier temps, on peut mettre:
            echo '<td class="container"><div class="center"></div></td>';  // que des cases centrales
            */

            if ($columnKey == 0 && $rowKey == 0) {
                echo '<td class="container"><div class="top left"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';  
            }
            elseif ($columnKey == $size && $rowKey == 0) {
                echo '<td class="container"><div class="top right"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($rowKey == 0) {
                echo '<td class="container"><div class="top"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($columnKey == 0 && $rowKey == $size) {
                echo '<td class="container"><div class="bottom left"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($columnKey == $size && $rowKey == $size) {
                echo '<td class="container"><div class="bottom right"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($rowKey == $size) {
                echo '<td class="container"><div class="bottom"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($columnKey == 0) {
                echo '<td class="container"><div class="left"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            elseif ($columnKey == $size) {
                echo '<td class="container"><div class="right"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            else {
                echo '<td class="container"><div class="center"><div class="' . setStone($game[$rowKey][$columnKey]) . '"></div></td>';
            }
            
        }
        echo '</tr>';
    }
}

function setStone ($stoneLocation) {
    if (!isset($stoneLocation)) {
        return "";
    }
    elseif ($stoneLocation) {
        return "white";
    }
    else {
        return "black";
    }
}

function loadGame ($game) {
    if (isset($_POST['game'])) {
        if ($_POST['game'] == 'game1') {
            $game = [
                [NULL,true,true,false,NULL],
                [NULL,true,false,false,NULL],
                [NULL,true,true,false,NULL],
                [NULL,true,false,NULL,false],
                [NULL,true,false,NULL,NULL]
            ];
        }
        elseif ($_POST['game'] == 'game2') {
            $game = [
                [NULL,true,false,false,true,NULL,NULL],
                [NULL,true,false,false,true,true,NULL],
                [NULL,true,false,NULL,false,true,NULL],
                [true,false,false,NULL,false,true,NULL],
                [true,true,false,NULL,false,false,true],
                [NULL,true,false,NULL,false,true,NULL],
                [NULL,true,false,NULL,false,true,NULL] 
            ];
        }
        return $game;
    }
}