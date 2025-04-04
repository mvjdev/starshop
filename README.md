### Apprends Symfony avec moi si tu es aussi débutant 😊

##### Installer Symfony et Composer sur ton ordinateur ici je suis sur linux 😊 (voir la documentation officielle [ici](https://symfony.com/download))
```
curl -sS https://get.symfony.com/cli/installer | bash
```
```
composer require symfony/amphp-http-client-meta
```
##### Pour créer un nouveau projet 😊
```
symfony new starshop
cd startshop
symfony server:start 
```

##### Ce petit bout de code est une initiation à Symfony dans ' src/Controller/DefaultController.php '

```
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    #[Route('/', name: 'index')]  // Route d'accueil ce "name" doit être différent pour chaque route
    public function index(): Response  // Nom de la fonction : index
    {
        return new Response('Hello World');
    }

    #[Route('/hello/{name}', name: 'hello')]  // Route personnalisée avec un nom
    public function hello(string $name): Response  // Nom de la fonction : hello
    {
        return new Response("Hello $name");
    }
}

```

