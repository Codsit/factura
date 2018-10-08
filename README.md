# Codsit-Factura PHP

[![Latest Stable Version](https://packagist.org/packages/codsit/factura)](https://packagist.org/packages/codsit/factura)


## Requisitos

* PHP 5.3 o superiores.
* Credenciales de comercio Codsit Facturacion (1).

(1) Debes registrarte [aquí](https://factura.codsit.com/). Luego, crear una Cuenta y estando en el panel, acceder a Desarrollo >
[***API Keys***]

## Instalación

### Vía Composer

```bash
composer require codsit/factura dev-master
```

```json
{
  "require": {
    "culqi/culqi-php": "1.3.3"
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
    $API_KEY = "aF9ON5CiUTxx9ra9JJtzixuxc02MRlmzQSs91JedVXh7qOKFlc";
    $codsit = new Codsit(array('api_key' => $API_KEY));

    // Creando Cargo a una tarjeta
    $factura = $codsit->Api->factura(array (
        'datos_de_la_factura_electronica' =>
            array (
                'version_del_ubl' => 'v20',
                'numeracion_conformada_por_serie_y_numero_correlativo' => 'F001-20',
                'fecha_de_emision' => '2018-08-24',
                'hora_de_emision' => '11:11:11',
                'tipo_de_documento' => '01',
                'tipo_de_moneda_en_la_cual_se_emite_la_factura_electronica' => 'PEN',
                'fecha_de_vencimiento' => '2018-08-24',
            ),
        'datos_del_emisor' =>
            array (
                'numero_de_ruc' =>
                    array (
                        'numero_ruc' => '20501973522',
                        'tipo_de_documento' => '6',
                    ),
                'nombre_comercial' => 'PCR',
                'apellidos_y_nombres_denominacion_o_razon_social' => 'Peru c',
            ),
        'datos_adicionales_lugar_en_el_que_se_entrega_el_bien_o_se_presta_el_servicio' =>
            array (
                'codigo_del_domicilio_fiscal_o_de_local_anexo_del_emisor' => '0001',
            ),
        'datos_del_cliente_o_receptor' =>
            array (
                'tipo_y_numero_de_documento_de_identidad_del_adquirente_o_usuario' =>
                    array (
                        'numero_de_documento' => '10417844358',
                        'tipo_de_documento' => '6',
                    ),
                'apellidos_y_nombres_denominacion_o_razon_social_del_adquirente_o_usuario' => 'Pancho',
            ),
        'guia_de_remision_relacionada' =>
            array (
                0 =>
                    array (
                        'numero_de_guia' => '0001-002020',
                        'tipo_de_documento' => '09',
                    ),
            ),
        'otro_documento_relacionado' =>
            array (
                0 =>
                    array (
                        'numero_de_guia' => '0001-002020',
                        'tipo_de_documento' => '09',
                    ),
            ),
        'informacion_adicional_gastos_art_37_renta___numero_de_placa_del_vehiculo' => 'B1F-945',
        'items' =>
            array (
                0 =>
                    array (
                        'datos_del_detalle_o_item' =>
                            array (
                                'numero_de_orden_del_item' => '1',
                                'unidad_de_medida_por_item' => 'CS',
                                'cantidad_de_unidades_por_item' => '1',
                                'codigo_producto_de_sunat' => '51121703',
                            ),
                        'informacion_adicional_gastos_art_37_renta' =>
                            array (
                                'descripcion_detallada_del_servicio_prestado_bien_vendido_o_cedido_en_uso_indicando_las_caracteristicas' => 'Inca Kola 250 ml',
                                'valor_unitario_por_item' => '100',
                                'precio_de_venta_unitario_por_item_y_codigo' =>
                                    array (
                                        'codigo_de_tipo_de_precio' => '01',
                                    ),
                                'valor_referencial_unitario_por_item_en_operaciones_no_onerosas_y_codigo' =>
                                    array (
                                        'monto_de_valor_referencial_unitario' => '0',
                                    ),
                                'afectacion_al_igv_por_item' =>
                                    array (
                                        'monto_de_igv' => '18',
                                        'afectacion_al_igv' => '10',
                                    ),
                                'sistema_de_isc_por_item' =>
                                    array (
                                        'monto_de_isc' => '0',
                                        'tipo_de_sistema_de_isc' => '02',
                                    ),
                                'valor_de_venta_por_item' => '100',
                                'descuentos_por_item' =>
                                    array (
                                        'monto_del_descuento' => '0',
                                    ),
                            ),
                        'informacion_adicional_a_nivel_de_item_gastos_intereses_hipotecarios_primera_vivienda' =>
                            array (
                                'nro_de_contrato' => '201205170008',
                                'fecha_de_otorgamiento_del_credito' => '2017-05-17',
                            ),
                    ),
            ),
        'totales' =>
            array (
                'total_valor_de_venta_exportacion' =>
                    array (
                        'monto' => '10',
                    ),
                'total_valor_de_venta_operaciones_gravadas' =>
                    array (
                        'monto' => '100',
                    ),
                'total_valor_de_venta_operaciones_inafectas' =>
                    array (
                        'monto' => '0',
                    ),
                'total_valor_de_venta_operaciones_exoneradas' =>
                    array (
                        'monto' => '0',
                    ),
                'total_valor_de_venta_operaciones_gratuitas' =>
                    array (
                        'total_valor_venta_operaciones_gratuitas' => '0',
                    ),
                'total_descuentos' =>
                    array (
                        'monto' => '0',
                    ),
                'sumatoria_igv' =>
                    array (
                        'sumatoria_igv_amount' => '18',
                    ),
                'sumatoria_isc' =>
                    array (
                        'sumatoria_isc_amount' => '0',
                    ),
                'sumatoria_otros_tributos' =>
                    array (
                        'sumatoria_otros_tributos_amount' => '0',
                    ),
                'descuentos_globales' => '0',
                'sumatoria_otros_cargos' => '0',
                'importe_total_de_la_venta_cesion_en_uso_o_del_servicio_prestado' => '118',
            ),
        'informacion_adicional_percepciones' =>
            array (
                'importe_de_la_percepcion_en_moneda_nacional' =>
                    array (
                        'codigo_de_tipo_de_monto' => '2001',
                        'codigo_de_regimen_de_percepcion' => '',
                        'base_imponible_percepcion' => '0',
                        'monto_de_la_percepcion' => '0',
                        'monto_total_incluido_la_percepcion' => '0',
                    ),
            ),
        'informacion_adicional_anticipos' =>
            array (
                'informacion_prepagado_o_anticipado' =>
                    array (
                        'serie_y_numero_de_documento_que_se_realizo_el_anticipo' => '123-123',
                        'tipo_de_comprobante_que_se_realizo_el_anticipo' => '',
                        'tipo_de_documento_del_emisor_del_anticipo' => '',
                    ),
                'total_anticipos' => '0',
            ),
        'informacion_adicional' =>
            array (
                'tipo_de_operacion' => '01',
                'leyendas' =>
                    array (
                    ),
            ),
        'extras' =>
            array (
                'logo' => '', // en Base 64
            ),
    ));
    // Respuesta
    echo json_encode("result".$factura);

} catch (Exception $e) {
    echo json_encode($e->getMessage());
}
```


## Documentación
¿Necesitas más información para integrar Codsit-Facturas en tu sistema escríbenos aqui huamanjhordy@gmail.com 


## Licencia

Licencia MIT. Revisar el LICENSE.md.
