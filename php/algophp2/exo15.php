<?php
$email = "elan@elan-formation.fr";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo $emailErr;
}
else {
  echo "L'adresse $email est une adresse e-mail valide";
}