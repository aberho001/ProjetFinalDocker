# Projet final docker

Afin de déployer l'application Angular, veuillez d'abord installer toutes les bibliothèques nécéssaires (npm install) etcompilez l'application (npm run build).
Une fois votre application compilé avec ses bibliothèques, veuillez déposer le contenu du dossier /dist/votreApplication (soit le dossier /browser et les autres fichiers contenus dans /dist/votreApplication) à l'intérieur du dossier /web/angular.

Afin de déployer l'application Angular, veuillez d'abord installer toutes les bibliothèques nécéssaires (composer install).
Une fois les bibliothèques installées, pour voupvez déposer l'intégralité de votre application à l'intérieur du dossier /web/laravel.

Vous pouvez également déposer des scripts sql dans le dossier /sql afin de générer une base de donnéee à la création du containeur MySQL.

Une fois les containeurs lancés : 

- PhpMyAdmin est disponible à l'adresse : http://localhost:8080.

- MySql est disponible au port 3307.

- L'application Angular (front-end) est disponible à l'adresse : http://localhost:8001.

- L'application Laravel (back-end / API) est disponible à l'adresse : http://localhost:8000.

Une fois les containers lancés, vous pouvez vous connecter à chacuns d'eux via "docker exec -it nomDuContenaire bash".
Les trois containeurs sont :
- web
- db
- phpmyadmin

# ATTENTION
Votre projet Laravel peux nécéssiter d'exécuter dans /srv/localhost-laravel via "docker exec -it web bash" les commandes suivantes :
 - php artisan key:generate
 - php artisan migrate:fresh --seed

 Vous pouvez aussi exécuter "cd /srv/localhost-laravel/" puis "./laravel.sh" pour exécuter ces 2 commandes en même temps.