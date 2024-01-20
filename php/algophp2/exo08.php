<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
function repeterImage ($url, $nbImg) {
    for ($i = 1; $i <= $nbImg; $i++){
        echo "<img src='$url'/>";
    }
}

repeterImage($url, 4);