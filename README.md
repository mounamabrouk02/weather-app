# A propos :
C’est une application de prévisions météo, créée à l’aide du Framework Laravel.
L’utilisateur va premièrement créer son compte pour qu’il puisse se connecter. Il peut créer sa propre liste des villes préférées en cliquant sur le bouton “Ajouter ville”. Ensuite, dans la page d’accueil, il peut soit saisir une nouvelle ville dans l’input et cliquer sur chercher, soit choisir une ville parmi sa propre liste des villes préférées.
Le projet utilise l’API Weather pour récupérer les données météorologiques en direct d’une ville spécifique; tels que la température, la vitesse du vent, le degré de vent, la direction du vent, la pression,l’humidité et la couverture.








 










# Environnement d'exploitation:
-  XAMPP
-  PHP version 8.0.12
-  MySQL
-  Laravel Installer 4.2.8
-  composer
-  npm
-  Navigateur web
-  Visual Studio code
-  API weatherstack:
   https://weatherstack.com/dashboard
 
# Installation :
Installer Xampp (celui-ci va vous permettre d’installer php et MySQL)
Installer Visual studio code 
Télécharger le zip code, après avoir fait l’extraction, ouvrir le projet dans Visual Studio Code
Ouvrit la CMD dans le dossier et exécuter les commandes suivants :
    - composer install
    - npm install
    - npm run dev
 
Ouvrir XAMPP, lancer Apache et MySQL.
Créer votre Base de données dans MySQL avec le nom “weather”.
Dans le fichier .env supprimer la ligne suivante :
    - DB_FOREIGN_KEYS=true
Créer un comte dans le site https://weatherstack.com/dashboard ensuite récupérer l’API KEY et placer le dans la ligne suivante dans le fichier .env :
    -  WEATHER_API_KEY=
 
Ouvrir le terminal dans Visual studio code. Exécuter les commande suivants :
    - php artisan migrate
    - php artisan serve
 
 
# Caractéristique :
-  Création d’une liste des villes préférés 
-  Recherche météo par ville
-  La température
-  Icônes personnalisées selon la température
-  Affichage d’alert en cas de température anormale
-  La vitesse du vent
-  Le degré de vent
-  La direction du vent
-  La pression
-  L’humidité 
-  La couverture.

# Licence MIT
