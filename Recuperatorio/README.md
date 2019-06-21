# Recuperatorio.


# Alumno: FACUNDO OTERO L:118048
## INSTALACION
-Resuelto con PDO
- Clonar el repositorio
 
- Crear un schema  de base de datos 

- Ejecutar los migrations del directorio `sql/` en orden
 

- Ejecutar `composer install`

-Ejecutar con php -S localhost:xxxx


### Aclaración

Por cada objeto creado por usted mismo (Model o Controller), debera indicar a
composer que regenere el autoload:

```
composer dumpautoload
```

Si lo que se desea es agregar una nueva libreria de 3ero

```
composer requiere name/lib:version
```

## Deploy / ejecución

### Local

Ejecutar:

```
git clone https://github.com/tomasdelvechio/The-PHP-Practitioner-Full-Source-Code.git paw-mvc/
cd paw-mvc/
# Aca irian los pasos de instalación
php -S localhost:8888
```

Luego ingresar a http://localhost:8888

