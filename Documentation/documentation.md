



# DOCUMENTATION_PPE_PARKING

Projet réalisé par Benoit Valle et Alexandre Kaprielian BTS SIO 2ème année à ITIC Paris.

Intitulé du projet sur [http://enseignement.alexandre-mesle.com/PPE/parking/](http://enseignement.alexandre-mesle.com/PPE/parking/)

Liens GitHub du projet [https://github.com/Fourkap/PPE_Parking](https://github.com/Fourkap/PPE_Parking)



* * *



# Technologies utilisées

- Pour le MCD graphique: MOCODO  
- Pour la maquette du site: Balsamiq  
- Pour la base de donnée: MySQL  
- Pour le Back-end: PHP  
- Pour le Front-End: HTML5, CSS3, JavaScript, SCSS, Bootstrap<br>
- Logiciel de présentation: Microsoft POWERPOINT<br>
- Outils de collaborations: Github, Trello














# Liste des tâches

on s'etait dit que pour modifier le nombre de place disponible dans le parking on pourrait simplement supprimer ou ajouter des lignes dans la table PLACE. Ce qui n'aurait pas été possible a cause des foreign key. On peut simplement ajouté un autre etat que ' disponible ' et 'occupé' dans la donnée etat_p. On peut mettre une troisième valeur possible a etat_p qui signifirait 'pas utilisable'. on aurait qu'a créer une table avec 1000 places donc 1000 id_p avec de base la valeur 'pas utilisable' et passer le nombre de place que l'on veut en 'disponible'.

- Création d'une documentation comprenant la liste des taches, les technologies à utiliser, les maquettes et le MCD 
- Mise en place du projet sur Github et attributions des accès aux différents collaborateurs
-	Faire un système de demande d'inscription (simple formulaire avec ajout dans la table user mais avec un niveau non validé)
-	Mettre en place une fonction mot de passe perdu (fonctionnement avec token ????) (alexandre doit expliquer ce fonctionnement)
-	Afficher la place qui est attribuée et celles qui l’ont été par le passé ()
-	Un système de réservation de place (simple bouton qui attribue une place si possible ou qui l’envoie en file d’attente)
-	Afficher son rang dans la file d’attente ()
-	Modification de mot de passe (simple formulaire qui modifie la table user en remplace le mot de passe par un nouveau)
-	Crypter les mots de passe quand ils sont saisis dans la bdd ($requete->bindValue(':mdp',sha1($_POST['mdp']),PDO:: PARAM_STR);)
-	Faire un système de validation d'inscription (afficher avec boucle sur la page le détail des demandes d’inscription, puis deux boutons ‘accepter’ ou ‘refuser’)
-	Faire un système d'édition du nombre de place disponible dans le parking (simple formulaire et qui permet de changer la valeur maximale du nombre de place dans la table ?????)
-	Un système d’édition de la liste des utilisateurs et permettre modification de leur mot de passe (afficher avec boucle liste des utilisateurs avec bouton pour chacun qui envoie sur une page modification avec les infos de l’user)
-	Pouvoir afficher la liste d’attente (afficher avec une boucle la table ‘place’)
-	Pouvoir afficher l’historique des réservations (afficher avec boucle la table qui relient les tables 'users' et 'places')
-	Pouvoir gérer manuellement l’attribution des place ()
-	Pouvoir gérer manuellement la file d’attente ()
- Faire un système aléatoire d’attribution de place
- Faire un système de compte à rebours quand un user à une place et pouvoir modifier le temps attribué
- Faire un système de liste d’attente s’il n’y a plus de place dispo
- Quand compte à rebours finit et que l’user nécessite une nouvelle place il revient en file d’attente automatiquement


séparation entre le nouveau et l'ancien pavé
## Liste pré-applicative 
- Création d'une documentation comprenant la liste des taches, les technologies à utiliser, les maquettes, le MCD et la base de données. 
- Mise en place du projet sur Github et attributions des accès aux différents collaborateurs
- Mise en place d'un Trello pour un travail collaboratif. 
## Fonctions primaire de l'application

-	Création du MCD et de la base de données (cf Partie Modèle Conceptuel des Données et Base de données)
-	Création des pages constituant le site, suivant les maquettes (cf Maquettes) et en respectant l'architecture logicielle Modèle vue contrôleur (MVC) Le modèle contient les données à afficher, la vue contient la présentation de l'interface graphique, le contrôleur contient la logique concernant les actions effectu par l'utilisateur. Page d’accueil, page d’inscription, page utilisateur, page d’administration.
-	Elaboration du système d’inscription, connexion, ... Donc des fonctionnalités basiques d’un site. Sur les pages respectives.
-	Mise en place des fonctionnalités de la page admin. Affichage et approbation des demandes d’inscriptions.
-	Elaboration du système de réservation aléatoire sur la page utilisateur. Ensuite l’affichage des places disponibles puis de l’historique des réservations.
-	Mise en place du système de mise en attente. Et de l’affichage du rang dans la file sur la page utilisateur puis de la file en elle-même sur la page admin. 
-	Sur la page admin, affichage de la liste d’attente puis de la liste de l’historique des réservations.
-	Securité sur le mot de passe en hashage en SHA-256.

## Fonctions secondaires de l'application
-	Ajout des fonctionnalités de modification de la liste d’attente et de la liste des places.  
-	Fonctionnalité d’attribution manuelle des places sur la page admin.
-	Possibilité de la reinitialisation du mot de passe utilisateur via un système d'envoi de mail avec un fonctionnement de token, token qui est identique en base de donnée ainsi que dans le liens trouver dans l'email envoyer à l'utilisateur. 
- 	Securité du site, du point de vue du front-end verification en javascript de tout les formulaires avec l'utilisation de Regex en rapport avec le champs ex(email, adresse), verification lors de l'inscription du mot de passe indiquer avec une double verification. du point de vue du back-end sécurisation en php face aux injections SQL en protegant les requetes utilisations de requête préparée avec des variables liées, trouvable dans les librairies PDO et MySQLi. 

# Plan du site
![image plan](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/plan_site.png)
# Maquettes
Page d'accueil (index.php)

![Image Index](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/indexphp.png)
Page d'Inscription (inscription.php)

![Image Inscription](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/Inscription.png)
Page d'Admin

![Image admin](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/Admin.png)
Page Admin File d'attente

![Imageadmin_file_d'attente](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/admin_page_attente.png)

Page Admin Gestion des utilisateurs

![Image admin_gestion_util](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/Admin_inscription.png)
Page utilisateurs Menu
![Page_util_menu](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/Page_util_menu.png)
Page Utilisateurs 
![Image utili](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/utilisitateur.png)

Page modifier données utilisateur
![Image util modifier](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/modifier_gestion_utilisateur.png)


# Modèle Conceptuel des Données

Nous avons dans ce MDC :
	Trois entités : USERS, RESERVATION et PLACE.
	Deux associations : RESERVER et CONCERNER.
	
![MCD PPE Parking](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/MDC%20PPE%20Parking.png)

Nous pouvons apporter des précisions sur le rôle de certaines données.
Il y a dans chaque entités un identifiant afin que chaque élément présent dans chacune des entités soit différentiable et identifiable clairement et sans doute.
Ensuite on a un autre type de données qui vont permettre de stocker des informations pratiques concernant chaque élément de l'entité. Voici la liste de toutes les données que l'on peut ranger dans cette catégorie : nom, prénom, num_p.
Dans une troisième et dernière catégorie on retrouve les données qui vont nous servire pour les fonctionnalités demandées dans le sujet. Voici la liste : mdp, niveau, mail, etat_u, date_resa, date_debut, date_fin, etat_p.

Dans ce projet nous avons plusieurs objectifs qui nécessite une architecture précise du mcd et plus tard de la base de données. En effet, les fonctionnalités suivantes ont demandé une réflexions préventive:
 - un historique détaillé de réservation
 - une possibilité de changement de mot de passe
 - une approbation obligatoire de la part de l'admin à chaque création de compte
 - une liste d'attente autonome
 - les comptes sécurisés par un mot de passe

Pour l'historique détaillé de réservation, il faut la présence des données suivantes : date_resa, date_debut, date_fin. En effet ces données placées dans l'entité RESERVATION vont nous permettre à chaque nouvelle entrée de dresser sans difficulté l'historique d'une place ou d'un utilisateur.

Concernant le changement de mot de passe c'est toujours une procédure délicate, en effet c'est une source d'usurpation de compte. Il faut donc un moyen sûr de contacter le demandeur. C'est ici que la donnée "mail" intervient, en effet une boîte mail est un endroit sécurisé par un mot de passe où l'on pourra contacter sans crainte la personne.

Pour l'approbation, "niveau" intervient pour donner un grade aux utilisateurs. En effet le valeurs possibles seront "0,1,2 ou 3" respectivement "banni, en attente d'approbation, permis ou admin". Dans son espace, l'administrateur aura une interface qui lui presente les profils en attente d'approbation avec un bouton lui permettant de soit refuser une demande ou de l'approuver. Ce bouton changeant donc automatiquement le grade de l'utilisateur.

Pour la liste d'attente autonome, premièrement la donnée "etat_p" va nous permettre de savoir facilement si une place est libre "1" ou occupée "2". Ensuite, une fois qu'on a rendu compte de l'état de chaque place du parking il est simple de vérifier s’il n'y a plus de place disponible, dans ce cas doit donc de mettre l'utilisateur voulant réserver une place en état de file d'attente. C'est là où la donnée "etat_u" nous est utile, car cette donnée aura comme valeur possible "1, 2 ou 3" signifiant respectivement "aucune place attribuée, une place attribuée et en attente", rendant compte de l'état actuel de l'utilisateur. Grâce à ces 2 données on va pouvoir maintenant dresser des listes en se servant de requête sélective pour isoler les utilisateurs en attente. On pourra dans un dernier temps ordonner la liste en fonction de l’ancienneté de "date_resa". On pourra même si souhaité donner le temps d'attente dans la file pour chacun des utilisateurs dans cette file.
Une autre valeur possible de etat_p va nous permettre de moduler le nombre de place disponible. En effet "3" signifira que la place n'est "pas disponible" empechant sa reservation mais la gardant dans la table pour garder l'historique de reservation inchangé et encore utilisable sans conflit

Et enfin la donnée "mdp" servira à stocker une version cryptée du mot de passe de l'utilisateur. Cette valeur sera comparée avec celle entrée par l'utilisateur à chaque action de celui-ci.

# Base de données

## Voici la table users 

![table users.png](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/table%20users.png)

## Voici la table place

![table place.png](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/table%20place.png)

## Voici la table reservation

![table reservation.png](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/table%20reservation.png)

# Outil de collaboration 
Création de Trello un outils permettant un travail collaboratif
![Trello](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/Capture%20d%E2%80%99%C3%A9cran%202018-09-27%20%C3%A0%2014.11.26.png)

# Piste de réflexions techniques

•	Faire un système de demande d'inscription (simple formulaire avec ajout dans la table user mais avec un niveau 1 signifiant qu’il n’est pas validé par l’admin)
•	Mettre en place une fonction mot de passe perdu (fonctionnement avec un systèle de token)
•	Afficher la place qui est attribuée et celles qui l’ont été par le passé (afficher une table avec une requête cherchant dans la table réservation avec l’id_u)
•	Un système de réservation de place (simple bouton qui entre une ligne dans la table réservation une ligne avec une date_resa et une id_p. Dans le cas où il y a au moins une place avec etat_p = 1 l’id_p est attribuée aléatoirement parmi elles)
•	Afficher son rang dans la file d’attente (une requête qui sélectionne dans la table réservation toutes les réservations qui n’ont pas de date-debut, puis donne la position dans la table de cet utilisateur)
•	Modification de mot de passe (simple formulaire qui modifie la table user en remplaçant la valeur mdp par celle entrée par l’utilisateur, avec vérification de l’ancien mot de passe et vérification de la saisie du nouveau)•	Faire un système de validation d'inscription (afficher avec boucle sur la page admin avec une requête dans la table user montrant le détail de chaque demande d’inscription. Puis deux boutons ‘accepter’ ou ‘refuser’ appliquant la valeur 2 ou 0 a la donnée niveau)
•	Faire un système d'édition du nombre de place disponible dans le parking (deux éléments, un qui modifie dans la table PLACE le nombre de ligne dans la table avec pour etat_p une valeur de 3 signifiant que la place n’est pas utilisable. Le deuxième élément permettra de changer la valeur de la donnée etat_p par celle voulu pour moduler le nombre de place réellement utilisable)
•	Un système d’édition de la liste des utilisateurs et permettre la modification de leur mot de passe (afficher avec boucle liste des utilisateurs avec bouton pour chacun qui envoie sur une page modification avec les infos de l’user)
•	Pouvoir afficher la liste d’attente (afficher avec une boucle les valeurs présente dans la table RESERVATION n’ayant pas de valeur attribuée à la donnée date_debut)
•	Pouvoir afficher l’historique des réservations (afficher avec boucle la table RESERVATION avec pour id_u celui de l’utilisateur)
•	Pouvoir gérer manuellement l’attribution des place ()
•	Pouvoir gérer manuellement la file d’attente ()
•	Faire un système aléatoire d’attribution de place (une fonction sortant une valeur aléatoire dans l’ensemble des places ayant comme etat_p ‘disponible’
•	Faire un système de compte à rebours quand un user à une place et pouvoir modifier le temps attribué (faire un compte a rebours avec la donnée date_fin, puis une requete qui peut modifier la valeur date_fin)
•	Faire un système de liste d’attente s’il n’y a plus de place dispo (une requête qui, s’il n’y a pas au moins un (une requête qui, dans le cas où il n’y a pas de place avec etat_p = 1 l’id_p attribuée est celle de la réservation la plus ancienne parmi celle encore d’actualité (où date_fin n’a pas été dépassée)).
•	Quand compte à rebours finit et que l’user nécessite une nouvelle place il revient en file d’attente automatiquement ( une requete qui ajout une ligne dans la table RESERVATION, avec pour date_resa la valeur de date_fin. 
•	Crypter les mots de passe quand ils sont saisis dans la bdd ($requete->bindValue(':mdp',sha1($_POST['mdp']),PDO:: PARAM_STR);)

