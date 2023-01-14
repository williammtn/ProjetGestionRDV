# GestionRDV

GestionRDV est une refonte du site pour le [Salon Patrick](https://www.planity.com/salon-patrick-62840-neuve-chapelle). Ce site possède la possibilité pour les clients de choisir un créneau en particulier parmi les horaires disponibles et pour les coiffeurs de voir leur rendez-vous dans un calendrier.

(images du site à insérer plus tard)

## Status

Ce site est toujours en phase de développement. Certaines fonctionnalités ne fonctionneront pas ou ne seront, désormais, pas présentes pour l'instant.

## Utilisation

Ce projet necessite:
- PHP
- Laravel
- Node.js/NPM

Commencez d'abord par cloner le projet. Avant de le lancer, vous devez installer les dépendances. Pour cela, ouvrez un terminal et lancez ces deux commandes à la suite:

`npm install`  
`composer install`

### Windows

Vous pouvez tout simplement lancer le `run.bat` se trouvant à la racine du projet. Ceci va exécuter les commandes nécessaires et va lancer un navigateur avec le site.


### Linux

Ouvrez un terminal dans la racine du projet. Lancez d'abord cette commande:

`npm run dev`

Ensuite, vous pouvez lancer le serveur. Vous pouvez utiliser votre propre serveur (Apache etc.) ou utiliser le serveur de développement intégré de PHP en lançant cette commande:

`php artisan serve`  
ou  
`php artisan serve --port=INSERERPORT` en remplaçant "INSERERPORT" par votre port souhaité.

Après avoir fait cela, vous pouvez enfin lancer le navigateur de votre choix et mettre cet URL pour accéder au site:

`http://127.0.0.1:8000/` (si vous avez sélectionné un port différent, remplacez "8000" par le port que vous avez mis)

## Autre

Ce site a été conçu dans le cadre du cursus de la Licence Profesionnel DIOC à l'IUT de Lens. Ce projet à été mis en place par M. Tiente HSU. 
Les personnes ayant travaillé sur ce projet sont les suivantes:
- Allan PONCHAUT
- Théo LORIO
- Lucie CAUDRON
- William MOUTON
- Jean-Philippe COQUET
