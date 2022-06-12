# BTS SIO WEB ARCHI MVC
Voici une proposition d'architecture MVC pour l'élaboration d'un projet ou de TP en cours \
L'objectif pédagogique est :
- Appréhender un projet par couche via MVC
- Faire un projet "full POO" et dans les "best practices" attendu par les entreprises
- Orchestrer via un gestionnaire de package (composer)
- Développement de test unitaire
- Début d'approche pour l'enseignement d'une framework (symfony, slim, Laravel ...)

Cible :
- Première année / 2e semestre pour AP ou Support
- Deuxième année / 1re semestre pour AP 

### SETUP PROJET
Installation du projet
````
$ composer install
````

Mettre un fichier .env
````
$ cp .env-exemple .env
````
Puis renseigner les variables d'environnement dans le fichier .env

Demarrer ton projet
````
$ composer start
````


### DEV PROJET
En cas de création ou de mise a jour des classes du projet, faire la commande de autoloader
````
$ composer dump-autoload 
````
Pour la base de donnée, elle se trouve dans le répertoire "docs/bddqcm.sql"

### DEV STACK
| Version | Service                                                             | DESCRIPTION                      |
|:--------|:--------------------------------------------------------------------|:---------------------------------|
| ^5.4    | [vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv) | Loads environment variables      |
| ^3.3    | [twig/twig](https://packagist.org/packages/twig/twig)               | Template Engine (VIEW couch)     |
| ^1.3    | [nikic/fast-route](https://packagist.org/packages/nikic/fast-route) | Router Engine (CONTROLLER couch) |
| ^8.0    | PHP Engine                                                          |                                  |  
| ^2.0    | Composer Dependency Manager                                         |                                  | 
|         | [Testing](https://codeception.com/)                                 |                                  |

### DOCUMENTATION

![schema](https://github.com/bfoujols/BTS-SIO-WEB-ARCHI-MVC/blob/main/docs/Concept-MVC.png?raw=true)

#### USE CASE "/lister"

#### 1/ Demande HTTP via le browser
Le user envoie une requête "Demande" HTTP via un browser, voici l'adresse http://localhost/lister
#### 2/ Réception HTTP
La couche CONTROLLER (via FastRoute) réceptionne la requête HTTP -> /lister \
et l'envoie sur le bon controller -> Quizz\Controller\Questionnaire\ListController
#### 3/ Couche MODEL
La couche MODEL se charge de gestion des données
#### 4/ La database
La database est en relation avec la couche MODEL
#### 5/ Traitement de donnée
Une fois le traitement de données via la couche MODEL, les données sont envoyées dans un moteur de template (template angine) -> Twig
#### 6/ Couche VIEW
Dans la couche VIEW, les données sont placées dans les composants des templates HTML puis transmis au user via le protocole HTTP
#### 7/ Reponse HTTP via le browser
Le user réceptionne la requête "Reponse" pour que le browser puisse interpréter le code d'interface (HTML/CSS/JS) avec sa runtime local

### AUTEUR
Benoit Foujols - ORT Sup' Montreuil - AC Creteil

![signature](https://github.com/bfoujols/bfoujols/blob/main/assets/bfoujols-sign.png?raw=true)
