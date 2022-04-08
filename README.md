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

### SETUP PROJET
Installation du projet
````
$ composer install
````

Mettre un fichier .env
````
$ cp .env-exemple .env
````

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
| Version  | Service                                                                | DESCRIPTION                      |
|:---------|:-----------------------------------------------------------------------|:---------------------------------|
| ^5.4     | [vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv)    | Loads environment variables      |
| ^3.3     | [twig/twig](https://packagist.org/packages/twig/twig)                  | Template Engine (VIEW couch)     |
| ^1.3     | [nikic/fast-route](https://packagist.org/packages/nikic/fast-route)    | Router Engine (CONTROLLER couch) |
| ^8.0     | PHP engine                                                             |                                  |  
