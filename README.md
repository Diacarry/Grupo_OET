# Grupo_OET
Aplicativo realizado en php (7.2) haciendo uso del framework de laravel 6

Antes de iniciar el aplicativo, se deben instalar algunas dependencias, para solucionar esto, ejecute el comando
'npm i' o 'npm install'

En el archivo .env.example se encuentran los datos pricipales deconeccion a la base de datos
- name => acme
- port => 3306
- user => root
- password => 

Aunque el usuario y password puede ser configurado si lo desea para coincidir con su gestor MySql

Se debe crear una base de datos vacia llamada 'acme'

Se crearon una serie de migraciones para realizar el esquema de la base de datos mencionada anteriormente, para ejecutarlas use el comando
php artisan migrate

El esquema de dicha base de datos se establecio en 3 tablas ('owners', 'vehicles', 'drivers') con una relacion de 1:M, 1:1 respectivamente
Las columnas para cada tabla se explican acontinuación

owners              | propietarios
    identification  | cedula
    first_name      | primer_nombre
    second_name     | segundo_nombre
    last_name       | apellidos
    address         | direccion
    phone           | telefono
    city            | ciudad

drivers             | conductores
    identification  | cedula
    first_name      | primer_nombre
    last_name       | segundo_nombre
    last_name       | apellidos
    address         | direccion
    phone           | telefono
    city            | ciudad

vehicles            | vehiculos
    license_plate   | placa
    color           | color
    brand           | marca
    fk_driver       | llave_foranea_conductor
    fk_owner        | llave_foranea_propietario

Se realizaron algunos seed's para crear pocos registros, para hacer uso de los mismos, ejecute el comando
php artisan db:seed

Si ejecuto el comando anterior ya podra usar el aplicativo como administrador (usuario:admin@admin.com, password:password), claro esta que puede crear su propio usuario administrador