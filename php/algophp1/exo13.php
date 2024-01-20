<?php
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$notesTotal = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $notesTotal, 2);



echo "Les notes obtenus par l'éleve sont : ";
for ($i = 0; $i < $notesTotal; $i++) {
    echo $notes[$i]." ";
}
echo "<br>";
echo "Sa moyene générale est donc de : ".$moyenne;