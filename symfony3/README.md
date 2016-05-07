.checkout
=========

A Symfony project created on May 5, 2016, 4:47 pm.

.add project
php ./bin/console generate:bundle --namespace=Weather/RestBundle

├── AppBundle
│   ├── AppBundle.php
│   └── Controller
│       ├── DefaultController.php
│       └── RestController.php.org
└── Weather
    └── RestBundle
        ├── Controller
        │   └── DefaultController.php
        ├── Resources
        │   ├── config
        │   │   ├── routing.yml
        │   │   └── services.yml
        │   └── views
        │       └── Default
        │           └── index.html.twig
        ├── Tests
        │   └── Controller
        │       └── DefaultControllerTest.php
        └── WeatherRestBundle.php


.add table
php bin/console doctrine:schema:create
