# Utiliser une image de base
FROM php:8.0-apache

# Copier les fichiers de ton projet dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour les connexions HTTP
EXPOSE 80

# Installer des dépendances supplémentaires si besoin
RUN docker-php-ext-install mysqli pdo pdo_mysql
