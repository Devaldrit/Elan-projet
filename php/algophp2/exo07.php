<?php 
function genererCheckbox($elements) {
    echo '<form>';
    foreach ($elements as $option => $coche) {
        echo '<label>';
        echo '<input type="checkbox" name="' . $option . '"';

        // Vérifiez si la case doit être précochée
        if ($coche) {
            echo ' checked';
        }

        echo '> ' . $option . '</label><br>';
    }
    echo '</form>';
}

$elements = array (
    "option 1" => true,
    "option 2" => false,
    "option 3" => true,
);
genererCheckbox($elements);
?>