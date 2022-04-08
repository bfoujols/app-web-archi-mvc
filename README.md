````
   ___        _         _                                
  / _ \ _   _(_)_______(_)____                           
 | | | | | | | |_  /_  / |_  /                           
 | |_| | |_| | |/ / / /| |/ /                            
  \__\_\\__,_|_/___/___|_/___|         __  __ _          
 | __ )  __ _  ___| | __  / _ \ _ __  / _|/ _(_) ___ ___ 
 |  _ \ / _` |/ __| |/ / | | | | '_ \| |_| |_| |/ __/ _ \
 | |_) | (_| | (__|   <  | |_| | | | |  _|  _| | (_|  __/
 |____/ \__,_|\___|_|\_\  \___/|_| |_|_| |_| |_|\___\___|
                                                         
````
# BST-SIO-A-2022-Quizziz-Backend
Voici le modele construit en cours pour réaliser la suite du projet QUIZZIZ

### SETUP PROJET
Installation du projet
````
$ composer install
````

Mettre un fichier .env
````
$ cp .env-exemple .env
````
Puis renseigner les variables d'environnement dans le fichier .env \

Demarrer ton projet
````
$ composer start
````


### DEV PROJET
En cas de création ou de mise a jour des classes du projet, faire la commande de autoloader
````
$ composer dump-autoload 
````


### DEV STACK
| Version | Service                                                             | DESCRIPTION                      |
|:--------|:--------------------------------------------------------------------|:---------------------------------|
| ^5.4    | [vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv) | Loads environment variables      |
| ^3.3    | [twig/twig](https://packagist.org/packages/twig/twig)               | Template Engine (VIEW couch)     |
| ^1.3    | [nikic/fast-route](https://packagist.org/packages/nikic/fast-route) | Router Engine (CONTROLLER couch) |
| ^8.0    | PHP Engine                                                          |                                  |  
| ^2.0    | Composer Dependency Manager                                         |                                  | 
### DOCUMENTATION

![schema](https://github.com/bfoujols/BST-SIO-A-2022-Quizziz-Backend/blob/main/docs/Concept-MVC.drawio.png?raw=true)

#### USE CASE "/lister"

1/ Le user envoie une requête "Demande" HTTP via un browser, voici l'adresse http://localhost/lister \
2/ La couche CONTROLLER (via FastRoute) réceptionne la requête HTTP -> /lister et l'envoie sur le bon controller -> Quizz\Controller\Questionnaire\ListController \
3/ La couche MODEL se charge de gestion des données \
4/ La database est en relation avec la couche MODEL \
5/ Une fois le traitement de données via la couche Model, les données sont envoyees dans un moteur de template (template angine) -> Twig \
6/ Dans la couche VIEW, les données sont placées dans les composants des templates HTML puis transmis au user via le protocole HTTP \
7/ Le user réceptionne la requête "Reponse" pour que le browser puisse interpréter le code d'interface (HTML/CSS/JS) avec sa runtime local
