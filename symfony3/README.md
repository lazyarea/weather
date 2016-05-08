.checkout
=========

A Symfony project created on May 5, 2016, 4:47 pm.

.add project
=========
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


.add database
=========
php bin/console doctrine:database:create

.add table schema
=========
php bin/console doctrine:generate:entity
```
The Entity shortcut name: AppBundle:Product

Determine the format to use for the mapping information.

Configuration format (yml, xml, php, or annotation) [annotation]:

Instead of starting with a blank entity, you can add some fields now.
Note that the primary key will be added automatically (named id).

Available types: array, simple_array, json_array, object,
boolean, integer, smallint, bigint, string, text, datetime, datetimetz,
date, time, decimal, float, binary, blob, guid.

New field name (press <return> to stop adding fields): name
Field type [string]:
Field length [255]:
Is nullable [false]: true
Unique [false]:
```

.add table
=========
php bin/console doctrine:schema:create
```
ATTENTION: This operation should not be executed in a production environment.

Creating database schema...
Database schema created successfully!
```
```
MariaDB [symfony]> desc product;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(11)      | NO   | PRI | NULL    | auto_increment |
| name  | varchar(255) | YES  |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+
```
.check doctrine mapping infomation
=========
php bin/console doctrine:mapping:info
```
Found 1 mapped entities:
[OK]   AppBundle\Entity\Product
```
