<?php

// Création du tableau et du header
echo '<table border>
    <tr>
        <th>nombre</th>
        <th>carré</th>
        <th>racine</th>
    </tr>';

// Les lignes des nombres dynamiques
for ($i = 1; $i < 11; $i++) {
    echo '<tr>
                <td>'.$i.' </td>  
                <td>'.$i*$i.'</td>
                <td>'.sqrt($i).'</td>
            </tr>';
};
// Ferme le tableau
echo '</table>';


