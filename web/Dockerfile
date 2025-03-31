### Conteneur Web

# Utiliser Debian comme base
FROM debian

# Installation des dépendances en une seule commande pour optimiser l'image
RUN apt-get update && apt-get install -y \
    nginx php-fpm php-mysql php-cli php-xml php-mbstring php-curl \
    nano unzip curl composer git wget zip nodejs npm && \
    rm -rf /var/lib/apt/lists/*

# Installation de Laravel
RUN composer global require laravel/installer

# Installation de Angular CLI
# RUN npm install -g @angular/cli

# Copier la configuration Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Copier les applications Laravel et Angular
COPY laravel /srv/localhost-laravel
COPY angular /srv/localhost-angular

# Copier le script bash pour opérer l'application Laravel
COPY bash/laravel.sh /srv/localhost-laravel/laravel.sh

# Ajuster les permissions pour Laravel
RUN chown -R www-data:www-data /srv/localhost-laravel
RUN chmod -R 755 /srv/localhost-laravel/
RUN chmod -R 775 /srv/localhost-laravel/bootstrap/cache

# Ajuster les permissions pour Angular
RUN chown -R www-data:www-data /srv/localhost-angular
RUN chmod -R 755 /srv/localhost-angular

# Se positionner dans Laravel pour executer le script bash
# WORKDIR /srv/localhost-laravel
# RUN ./laravel.sh

# Se positionner dans Laravel pour...
# WORKDIR /srv/localhost-laravel

# ... préparer l'application
# RUN php artisan key:generate

# Exposer les ports
EXPOSE 8000 4200

# Démarrer PHP-FPM et Nginx
CMD service php8.2-fpm start && nginx -g "daemon off;"
