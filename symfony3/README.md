.checkout
=========

A Symfony project created on May 5, 2016, 4:47 pm.

.add project
php ./bin/console generate:bundle --namespace=Weather/RestBundle
```
./src/
./src/.htaccess
./src/AppBundle
./src/AppBundle/AppBundle.php
./src/AppBundle/Controller
./src/AppBundle/Controller/DefaultController.php
./src/AppBundle/Controller/RestController.php.org
./src/Weather
./src/Weather/RestBundle
./src/Weather/RestBundle/WeatherRestBundle.php
./src/Weather/RestBundle/Controller
./src/Weather/RestBundle/Controller/DefaultController.php
./src/Weather/RestBundle/Controller/BaseController.php
./src/Weather/RestBundle/Controller/RestController.php
./src/Weather/RestBundle/Tests
./src/Weather/RestBundle/Tests/Controller
./src/Weather/RestBundle/Tests/Controller/DefaultControllerTest.php
./src/Weather/RestBundle/Resources
./src/Weather/RestBundle/Resources/views
./src/Weather/RestBundle/Resources/views/Default
./src/Weather/RestBundle/Resources/views/Default/index.html.twig
./src/Weather/RestBundle/Resources/views/Rest
./src/Weather/RestBundle/Resources/views/Rest/index.html.twig
./src/Weather/RestBundle/Resources/config
./src/Weather/RestBundle/Resources/config/services.yml
./src/Weather/RestBundle/Resources/config/routing.yml
```

.add table
php bin/console doctrine:schema:create
