# Utilisez une image PHP officielle en tant qu'image de base
FROM php:7.4.26

COPY form.html /var/www/html/
COPY submit.php /var/www/html/

# Exposez le port 80 pour les connexions HTTP
EXPOSE 80

# Démarrer le serveur web PHP
CMD ["php", "-S", "0.0.0.0:80"]


