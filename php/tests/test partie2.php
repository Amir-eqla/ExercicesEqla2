<?php

// Problèmme algoritme :
// Demander à l'utilisateur quel route il choisis entre la gauche et la droite.
// Si il choisis la gauche, Demandez lui combien a-t-il d'argent.
// Si il répond au moins 50 alors afficher lui "Bienvenue à Disney Land". Sinon, afficher "rentre chez toi".
// Si il choisis la droite, afficher "Bienvenue au grand magasin".

// Ex 1 :
// echo "Hello World";

// Ex 2 :
// $age = readline("Quel age avez vous ?");
// if ($age>=80)
// {
//     echo "Tu es vieux !";
// }

// Ex 3 :
// $gout = readline("Tapez 1 si vous préférez mangé salé et tapez 2 si vous préférez manger sucré. : ");
// $choix = 0;
// if ($gout==1)
// {
//     $choix = readline("Tapez 1 si vous voulez des frites. Tapez 2 si vous voulez une pizza. Tapez 3 si vous voulez des nouilles. : ");

//     if ($choix==1)
//     {
//         echo "Les frites valent 1000 calories. ";
//     }
//     elseif ($choix==2)
//     {
//         echo "La pizza vaut 800 calories. ";
//     }
//     elseif ($choix==3)
//     {
//         echo "Les nouilles valent 600 calories";
//     }
//     else 
//     {
//         echo"Erreur, il faut tapez soit 1, soit 2, soit 3. ";
//     }
// }

// elseif ($gout==2)
// {
//     $choix = readline("Tapez 1 si vous voulez des bonbons. Tapez 2 si vous voulez une glace. Tapez 3 si vous voulez une tablette de chocolat. : ");
//     if ($choix==1)
//     {
//         echo "Les bonbons valent 700 calories. ";
//     }
//     elseif ($choix==2)
//     {
//         echo "La glace vaut 850 calories. ";
//     }
//     elseif ($choix==3)
//     {
//         echo "La tablette de chocolat vaut 700 calories";
//     }
//     else 
//     {
//         echo"Erreur, il faut taper soit 1, soit 2, soit 3. ";
//     }
// }

// else 
// {
//     echo"Erreur, il faut taper soit 1, soit 2. ";
// }

// Ex 4 :
echo "Le joueur x commence après ça sera le tour du joueur o. a1 correspond à la case en haut à gauche, a3 correspond à la case en haut à droite.";

do
{
    $x1 = readline("Premier coup du joueur x : ");
    $o1 = readline("Premier coup du joueur o : ");
    if ($x1==$o1)
    {
        echo "Erreur, Vous avez attribué une place déjà prise? Le jeu va recommencer. ";
        continue,
    }

    $x2 = readline("Deuxième coup du joueur x : ");
    if ($x2==$o1 && $x2==$x1)
    {
        echo "Erreur, Vous avez attribué une place déjà prise? Le jeu va recommencer. ";
        continue,
    }

    $o2 = readline("Deuxième coup du joueur o : ");
    if ($o2==$o1 && $x2==$x1 && $o2==$x2)
    {
        echo "Erreur, Vous avez attribué une place déjà prise? Le jeu va recommencer. ";
        continue,
    }

    $x3 = readline("Troisième coup du joueur x : ");
    if ($x3==$o1 && $x3==$x1 && $x3==$o2 && $x3==$x2)
    {
        echo "Erreur, Vous avez attribué une place déjà prise? Le jeu va recommencer. ";
        continue,
    }

    $o3a = readline("Troisième coup du joueur o. Entrez la ligne (a,b ou c) : ");
    $o3b = readline("Troisième coup du joueur o. Entrez la colonne (1,2 ou 3) : ");
    $o3 = readline("Troisième coup du joueur o : ");
    if ($o3==$o1 && $o3==$x1 && $o3==$o2 && $o3==$x2 && $o3==$x3)
    {
        echo "Erreur, Vous avez attribué une place déjà prise? Le jeu va recommencer. ";
        continue,
    }
    elseif ()
}
while (true);


?>