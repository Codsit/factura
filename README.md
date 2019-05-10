# Codsit-Factura PHP

[![Latest Stable Version](https://poser.pugx.org/codsit/factura/v/stable)](https://packagist.org/packages/codsit/factura)
[![Total Downloads](https://poser.pugx.org/codsit/factura/downloads)](https://packagist.org/packages/codsit/factura)
[![License](https://poser.pugx.org/codsit/factura/license)](https://packagist.org/packages/codsit/factura)

## Requisitos

* PHP 5.3 o superiores.
* Credenciales de comercio Codsit Facturacion (1).

(1) Debes registrarte [aquí](https://fac.codsit.com/). Luego, crear una Cuenta y estando en el panel, acceder a Desarrollo >
[***API Keys***]

## Instalación

### Vía Composer

```bash
composer require codsit/factura dev-master
```

```json
{
  "require": {
    "codsit/factura": "dev-master"
  }
}
```

Y cargar todo usando el autoloader de Composer.

```php
require 'vendor/autoload.php';
```
## Como Usar
### Enviar Boleta Sunat
```php
use Codsit\Codsit;

try {
    require '../vendor/autoload.php';

    // Api_key de la facturacion
    $API_KEY = "aF9ON5CiUTxx9ra9JJtCREC465Ss91JedVXh7qOKFlc";  // Api_key (https://fac.codsit.com)
    $codsit = new Codsit(array('api_key' => $API_KEY));

    // Creando Nueva Factura
    $factura = $codsit->Api->factura('//--JSON-VENTA-[ARRAY]--//');
    
    $
    // Respuesta
    echo json_encode("result".$factura);

} catch (Exception $e) {
    echo json_encode($e->getMessage());
}
```
### Servicios  DNI
```php
    $API_KEY = "aF9ON5CiUTxx9ra9JJtCREC465Ss91JedVXh7qOKFlc"; 
    $codsit = new Codsit(array('api_key' => $API_KEY));
    $res = $codsit->Services->Dni('88888888');
    json_encode($res);
```
### Servicios  RUC
```php
    $API_KEY = "aF9ON5CiUTxx9ra9JJtCREC465Ss91JedVXh7qOKFlc"; 
    $codsit = new Codsit(array('api_key' => $API_KEY));
    $res = $codsit->Services->Ruc('20124512123');
    json_encode($res);
```

## Documentación
¿Necesitas más información para integrar Codsit-Facturas en tu sistema escríbenos aqui huamanjhordy@gmail.com 


## Licencia

Licencia MIT. Revisar el LICENSE.md.
