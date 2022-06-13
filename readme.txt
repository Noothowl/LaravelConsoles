Workflow:
1) Create laravel proyect
2) Master blade view 
3) blade views
4) Routes (web.php): rutas de acceso a las views
5) Controllers: métodos respectivos a dicho controlador

6) Conection to DB: create a DB with the name in ENV
7) create migration: BD.2
8) create a model to admin that migration: php artisan make:model(singular)
9) Import the model in the controller
*) assets in /public 


Database:
1) Refresh DB php artisan migrate
2) Create a migration: php artisan make:migration nombre_tabla --create=nombre_tablas (plural)