<?php 
    session_start();
    // unset($_SESSION['products']);
    var_dump($_SESSION['products']);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recap.css">
    <title>Récapitulatif des produits</title>
</head>
<body>
    <a href="index.php">Panier</a>
    <?php 

    // $_SESSION contient les données stockées dans la session utilisateur côté serveur
    //On vérifie l'exitence de produit dans le tableau gracce a isset
    if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<p>Aucun produit en session...</p>";
    } else {
        echo "<div id='container'>",
             "<table>",
                "<thead>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Quantité Totale</th>",
                        "<th>Total</th>",
                        "<th>Action</th>",
                        "<th>Quantité</th>",
                    "</tr>",
                "</thead>",
                "<tbody>";

        $totalGeneral = 0;
        $totalQttGeneral = 0;

        // Utiliser une variable séparée pour suivre les indices numériques
        $numericIndex = 1;

        foreach ($_SESSION['products'] as $index => $product) {
            echo "<tr>",
                    "<td>" . $numericIndex . "</td>",
                    "<td>" . $product['name'] . "</td>",
                    "<td>" . number_format($product['price'], 2, ",", "&nbsp;"). "&nbsp;€</td>",
                    "<td>" . $product['qtt'] . "</td>",
                    "<td>" . $product['qtt'] * $product['price'] . "&nbsp;€</td>",
                    "<td>" . number_format($product['total'], 2, ",", "&nbsp;"). "&nbsp;€</td>",
                    "<td>",
                        "<a href='traitement.php?action=supprimer&id=$index'>",
                            "<button>supprimer</button>",
                        "</a>",
                    "</td>",
                    "<td>",
                        // "<form method='get' action='traitement.php?action=plus&id=' " . $index . "'>",
                        //     "<input type='hidden' name='id' value='" . $index . "' >",
                        //     "<input type='button' name='+' value='plus'>",
                        // "</form>",
                        "<a href='traitement.php?action=plus&id=$index'>",
                            "<button>+</button>",
                        "</a>",
                        "<a href='traitement.php?action=moins&id=$index'>",
                            "<button>-</button>",
                        "</a>",
                    "</td>",
                "</tr>";

            // //function pour incrementer ou decrementer un produit
            // function quantiteProduit($buttonPlus == $buttonPlus || $buttonMoins == $buttonMoins) {
            //     //incrementer 
            //     if ($buttonPlus){

            //         // filtrer la propriété "id" reçue en GET
            //         $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        
            //         // transformer le string reçu en int
            //         $id = intval($id);
        
            //         // echo "<br><br>id = ";
            //         // var_dump($id);
            //         // die();
                            
            //         // var_dump($_SESSION['products']);
            //         //je dois chercher mon id dans l'url et si il y a un porduit avec cet id  en session alors j'augmente la quantité
                            
            //         //verifier si le produit generale existe dans le $_SESSION  
            //         if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                            
            //         // calcul de la nouvelle quantité = l'ancienne quantité + 1
            //         $newQtt = $_SESSION['products'][$id]['qtt'] + 1;
                            
            //         // mise à jour de la quantité
            //         $_SESSION['products'][$id]['qtt'] = $newQtt;
                            
            //         // récupération du prix du produit
            //         $price = $_SESSION['products'][$id]['price'];
                            
            //         // mise à jour du total
            //         $_SESSION['products'][$id]['total'] = $newQtt * $price;
            //         }
            //     }
            //     //decrementer
            //     elseif($buttonMoins) { 
            //         // filtrer la propriété "id" reçue en GET
            //         $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        
            //         // transformer le string reçu en int
            //         $id = intval($id);
        
            //         // echo "<br><br>id = ";
            //         // var_dump($id);
            //         // die();
                            
            //         // var_dump($_SESSION['products']);
            //         //je dois chercher mon id dans l'url et si il y a un porduit avec cet id  en session alors j'augmente la quantité
                            
            //         //verifier si le produit generale existe dans le $_SESSION  
            //         if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                            
            //         // calcul de la nouvelle quantité = l'ancienne quantité - 1
            //         $newQtt = $_SESSION['products'][$id]['qtt'] - 1;
                            
            //         // mise à jour de la quantité
            //         $_SESSION['products'][$id]['qtt'] = $newQtt;
                            
            //         // récupération du prix du produit
            //         $price = $_SESSION['products'][$id]['price'];
                            
            //         // mise à jour du total
            //         $_SESSION['products'][$id]['total'] = $newQtt * $price;
            //         }
            //     }
                

            // }


            
            // a += b  équivaut à  a = a + b
            // += c'est une accumulation
            $totalGeneral += $product['total'];
            $totalQttGeneral += $product['qtt'];

            // Incrémenter la variable d'indice numérique
            $numericIndex++;

        } // fin foreach

        echo "<tr>",
                "<td colspan=4>Total général : </td>",
                "<td><strong>" . number_format($totalGeneral, 2, ",", "&nbsp;") . "&nbsp;€</strong></td>",
                "<td colspan=2></td>",
            "</tr>";
        echo "<tr>",
                "<td colspan=4>Quantité totale générale : </td>",
                "<td><strong>" . $totalQttGeneral . "</strong></td>",
                "<td colspan=2></td>",
            "</tr>",
            "<td>",
                "<a href='traitement.php?action=supprimerTout>&id=$index'>",
                    "<button>supprimer tout</button>",
                "</a>",
            "</td>",
            "</tbody>",
            "</table>",
        "</div>";

    }
    ?>
</body>
</html>
