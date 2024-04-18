# MOHAMMED_ELGHANAM_Oauth2
# This project does not have an interface
# Contexte du projet
Notre client est une entreprise qui gère plusieurs applications tierces nécessitant une authentification centralisée. Ils souhaitent mettre en place un système robuste et sécurisé qui permettra aux utilisateurs de s'authentifier une seule fois pour accéder à toutes les applications. La solution doit être basée sur une API Laravel.

​

1. Création d'un Administrateur par Défaut via une Seeder :

Pour démarrer le système, une seeder sera utilisée pour créer un administrateur par défaut avec des informations pré-définies.

​

2. Gestion des Utilisateurs par l'Administrateur :

L'administrateur doit avoir la capacité de créer, modifier et supprimer des utilisateurs. Cela inclut la gestion des informations de base telles que le nom, l'email et le mot de passe.

​

3. Authentification des Utilisateurs et Obtention d'un Jeton d'Accès :

Les utilisateurs doivent être en mesure de s'authentifier avec leurs identifiants et de recevoir un jeton d'accès qui leur permettra d'accéder aux données protégées des applications tierces.

​

4. Création des Groupes et Permissions :

Les utilisateurs seront organisés en groupes, et des permissions spécifiques seront attribuées à chaque groupe. Cela permettra de contrôler finement l'accès aux ressources et fonctionnalités des applications.

​

5. Unittest avec PHPUnit :

Des tests unitaires seront écrits pour chaque composant du système afin de garantir sa fiabilité et sa stabilité. PHPUnit sera utilisé comme outil de test.

​

6. Documentation avec Swagger :

La documentation de l'API sera générée automatiquement avec Swagger. Cela permettra aux développeurs tiers d'explorer facilement les endpoints disponibles et de comprendre comment les utiliser.

​

BONUS:

Créer un workflow sur Github pour automatiser le processus de build, de test et de déploiement.



# How to runing project

1. go to terminal:
cd main 
php artisan serve
2. install postman
work in postman

