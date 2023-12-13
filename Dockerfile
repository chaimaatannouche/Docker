# Utilisez une image PHP officielle en tant qu'image de base
FROM php:7.4.26

COPY form.html /var/www/html/
COPY submit.php /var/www/html/

# Exposez le port 8000 pour les connexions HTTP
EXPOSE 8000

# Démarrer le serveur web PHP
CMD ["php", "-S", "0.0.0.0:8000"]
