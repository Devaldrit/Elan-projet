<?php
    session_start();
    var_dump($_SESSION);
    if(isset($_GET['action'])){
        switch ($_GET['action']){
        case 'add':
            if(isset($_POST['submit'])) {
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
            
                // Vérifier que les valeurs sont valides et la quantité n'est pas inférieure à 0
                if($name && $price && $qtt !== null && $qtt >= 0){
                    //stocke les produits dont l'utilisateur a saisi pour les mettre dans le tableau
                    $product = [
                        "name" => $name,
                        "price" => $price,
                        "qtt" => $qtt,
                        "total" => $price * $qtt
                    ];

                    // tableau indexé : liste de valeurs, collection ordonnée d'éléments
                    // ex. : [15, 17.5, 12], ["Jean", "Marc", "Alice"]

                    // tableau associatif : collection de pairs clef=>valeur
                    // ex. : ["nom" => "pomme", "prix" => 1.15]

                    // $_SESSION['products'] est un tableau indexé, qui stocke la liste des produits
                    // Et dans ce tableau indexé, on va y placer les différents $product
                    // $product est un tableau associatif, qui est décrit/défini par les clefs/propriétés name, price, qtt, total

                    // si le tableau indexé n'existe pas encore
                    // if (!isset($_SESSION['products'])) {
                    // initialisation du tableau indexé vide
                    // $_SESSION['products'] = [];
                    // }

                    // ajout du produit dans le tableau indexé
                    $_SESSION['products'][] = $product;

                    // tableaux asso => indexé => asso
                     //// $_SESSION est un tableau associatif (en plus d'être une superglobale, ...)
                    // il contient des clefs/propriétés (si on les crée), dont "products"
                    //// $_SESSION['products'] est un tableau indexé
                    // il contient les produits
                    //// $_SESSION['products'][0] est le premier produit (s'il existe)
                    // il contient un produit, qui est un tableau associatif ($product)
            
                    // Calculer la quantité totale générale après l'ajout de chaque produit
                    $totalQttGeneral = 0;
                    foreach($_SESSION['products'] as $product) {
                        $totalQttGeneral += $product['qtt'];
                    }
            
                    // Stocker la quantité totale générale dans la session
                    $_SESSION['totalQttGeneral'] = $totalQttGeneral;
                }
            }
        break;
                
            case 'plus':
                //faire function pour regrouper les cas + et - a appeler sur l'id
                // filtrer la propriété "id" reçue en GET
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

                // transformer le string reçu en int
                $id = intval($id);

                // echo "<br><br>id = ";
                // var_dump($id);
                // die();
                    
                // var_dump($_SESSION['products']);
                //je dois chercher mon id dans l'url et si il y a un porduit avec cet id  en session alors j'augmente la quantité
                    
                // //verifier si le produit generale existe dans le $_SESSION  
                // if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                        
                //     // calcul de la nouvelle quantité = l'ancienne quantité + 1
                //     $newQtt = $_SESSION['products'][$id]['qtt'] + 1;
                        
                //     // mise à jour de la quantité
                //     $_SESSION['products'][$id]['qtt'] = $newQtt;
                        
                //     // récupération du prix du produit
                //     $price = $_SESSION['products'][$id]['price'];
                        
                //     // mise à jour du total
                //     $_SESSION['products'][$id]['total'] = $newQtt * $price;
                        
                //     // EN 2 LIGNES :
                //     // 1. incrémenter la quantité de 1
                //     // $_SESSION['products'][$id]['qtt']++;
                //     // 2. mise à jour du total
                //     // $_SESSION['products'][$id]['total'] = $_SESSION['products'][$id]['qtt'] * $_SESSION['products'][$id]['price'];
                // }

                // appel à la fonction en passant l'id du produit et isAdd = true en arguments
                addOrSubstract1Product($id, true);
            break;

            case 'moins' :
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

                // transformer le string reçu en int
                $id = intval($id);

                // //verifier si le produit generale existe dans le $_SESSION  
                // if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                        
                //     // calcul de la nouvelle quantité = l'ancienne quantité - 1
                //     $newQtt = $_SESSION['products'][$id]['qtt'] - 1;
                        
                //     // mise à jour de la quantité
                //     $_SESSION['products'][$id]['qtt'] = $newQtt;
                        
                //     // récupération du prix du produit
                //     $price = $_SESSION['products'][$id]['price'];
                        
                //     // mise à jour du total
                //     $_SESSION['products'][$id]['total'] = $newQtt * $price;
                // }

                // appel à la fonction en passant l'id du produit et isAdd = false en arguments
                addOrSubstract1Product($id, false);
            break;

            case 'supprimer' :
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
                
                // transformer le string reçu en int
                $id = intval($id);

                //suppression du produit dans le panier
                if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                        
                    // supprimer le produit du panier
                    unset($_SESSION['products'][$id]);
                }

            break;
            case 'supprimerTout':
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
                    
                // transformer le string reçu en int
                $id = intval($id);
    
                //suppression du produit dans le panier
                if(($id || $id === 0) && isset($_SESSION['products'][$id])) {
                        
                    // supprimer le produit du panier
                    unset($_SESSION['products']);
                }
            break;
        }

        header('Location:recap.php');
                
    }


    // fonction qui permet d'ajouter +1 ou de diminuer -1 un produit du panier en session
    function addOrSubstract1Product(int $id, bool $isAdd) {
        
        //verifier si le produit generale existe dans le $_SESSION  
        if(($id || $id === 0) && isset($_SESSION['products'][$id])) {

            // opérateur ternaire :   condition ? siVrai : sinon
                
            // calcul de la nouvelle quantité = l'ancienne quantité + 1
            $newQtt = $_SESSION['products'][$id]['qtt'] + ($isAdd ? 1 : -1);
            
            // si la qtt est >= 1
            if ($newQtt >= 1) {

                // mise à jour de la quantité
                $_SESSION['products'][$id]['qtt'] = $newQtt;
                    
                // récupération du prix du produit
                $price = $_SESSION['products'][$id]['price'];
                    
                // mise à jour du total
                $_SESSION['products'][$id]['total'] = $newQtt * $price;
                
            }
        }
    }

?>