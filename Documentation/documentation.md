



# DOCUMENTATION_PPE_PARKING

Projet réalisé par Benoit Valle et Alexandre Kaprielian BTS SIO 2ème année à ITIC Paris.

Intitulé du projet sur [http://enseignement.alexandre-mesle.com/PPE/parking/](http://enseignement.alexandre-mesle.com/PPE/parking/)

Liens GitHub du projet [https://github.com/Fourkap/PPE_Parking](https://github.com/Fourkap/PPE_Parking)



* * *



# Technologies utilisés

-Pour le MCD graphique: MOCODO  
-Pour la maquette du site: Balsamiq  
-Pour la base de donnée: MySQL  
-Pour le Back-end: PHP  
-Pour le Front-End: HTML5, CSS3, JavaScript, SCSS, JQuery  
-Logiciel de présentation: Microsoft POWERPOINT<br>
-Outil de collaboration: Github














# Liste des taches


- Création d'une documentation comprenant la liste des taches, les technologies à utilisait, les maquettes et le MCD 
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

# Maquettes
Page d'accueil (index.php)
![Image Index](https://github.com/Fourkap/PPE_Parking/blob/master/Documentation/Mockup%20ppe_parking/indexphp.png)
