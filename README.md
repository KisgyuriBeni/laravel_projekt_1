Létrehoztuk a projektet :
- composer create-project laravel/laravel: app_name

Az env állományt lemásoljuk és az adatbázis nevét felvesszük amihez csatlakozunk.

Létrehoztunk migrációs állományokat: 
- php artisan make:migration create_$tablename('s')_table

Most létre hoztunk egy create.sql állományt:
- ez tölti fel az adatbázist a teszt adataimkkal.

Kimigráltuk a migrációs állományokat.

Létrehozunk két-két controller-t és model-t
php artisan make:controller RenterController 
php artisan make:model Renter

A modelbe az adatokat definiáljuk.
A controllerbe pedig megírjuk a főbb működési metódusokat.

Megírtuk a controllereket Ez után a végpontokat írjuk meg.

Az egyiknél új tömböt hozok létre a másiknál lekérek egyet id alapján

Összekapcsoltuk az idegen kulccsal a két táblát.
BelongsTo és hasMany vel.