<?php
//Cargamos el xml para su manipulacion
$xmlGetAllData='<?xml version="1.0" encoding="UTF-8"?>
<cfdi:Comprobante xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xmlns:cfdi="http://www.sat.gob.mx/cfd/3" 
xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd" 
Version="3.3" Serie="P" Folio="6902" Fecha="2019-09-20T17:37:52" 
Sello="fnRa3+z9bIM/BPJa8Hgu7anGnVHBy3NU8Mqd1iVemofTOYHFRN/US2qH2rYmxb6wUwgX8On0yKecO7Sz/oVn8rZHjFKm7jpAcHDe9s1BaUignGqa3q8AvieE4npUaDZThTHd0SlxGo2AY0cU/kM6N/D0C7ZB0TLOwoLvh56qvRc7LdG01DWPEDVZfIorUYjMcdWv1xcyqZ7TVHFJnF/7Y8lWd8sD5mc2HeH3CfYCsLSceUMXjO6iWlcsS6Hk/UAxH9g5wohfrM4cPmrqYLq1kFW7fvkqFBD7Mv+4lUPOC48b4Hw2anm5ZlfPjWU6f4a+o5XqLWRRogK+zrNOm1UWog==" 
FormaPago="01" NoCertificado="00001000000409167821" 
Certificado="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" 
SubTotal="615.82" Moneda="MXN" Total="714.35" 
TipoDeComprobante="I" MetodoPago="PUE" 
LugarExpedicion="72430">
<cfdi:Emisor Rfc="TSL171218FP7" Nombre="Tech Solutions en línea S.A de C.V" RegimenFiscal="601"/>
<cfdi:Receptor Rfc="VERO6203149S6" Nombre="OSCAR IGNACIO VERDUGO ROMERO" UsoCFDI="G03"/>
<cfdi:Conceptos>
<cfdi:Concepto ClaveProdServ="84111506" Cantidad="1" ClaveUnidad="E48" Unidad="SERVICIO" Descripcion="PAQUETE DE CFDI 200 TIMBRES" ValorUnitario="615.820000" Importe="615.820000">
<cfdi:Impuestos><cfdi:Traslados><cfdi:Traslado Base="615.82" Impuesto="002" TipoFactor="Tasa" TasaOCuota="0.160000" Importe="98.531200"/>
</cfdi:Traslados></cfdi:Impuestos></cfdi:Concepto></cfdi:Conceptos>
<cfdi:Impuestos TotalImpuestosTrasladados="98.53"><cfdi:Traslados>
<cfdi:Traslado Impuesto="002" TipoFactor="Tasa" TasaOCuota="0.160000" Importe="98.53"/>
</cfdi:Traslados></cfdi:Impuestos><cfdi:Complemento>
<tfd:TimbreFiscalDigital xmlns:tfd="http://www.sat.gob.mx/TimbreFiscalDigital" xsi:schemaLocation="http://www.sat.gob.mx/TimbreFiscalDigital http://www.sat.gob.mx/sitio_internet/cfd/TimbreFiscalDigital/TimbreFiscalDigitalv11.xsd" Version="1.1" SelloCFD="fnRa3+z9bIM/BPJa8Hgu7anGnVHBy3NU8Mqd1iVemofTOYHFRN/US2qH2rYmxb6wUwgX8On0yKecO7Sz/oVn8rZHjFKm7jpAcHDe9s1BaUignGqa3q8AvieE4npUaDZThTHd0SlxGo2AY0cU/kM6N/D0C7ZB0TLOwoLvh56qvRc7LdG01DWPEDVZfIorUYjMcdWv1xcyqZ7TVHFJnF/7Y8lWd8sD5mc2HeH3CfYCsLSceUMXjO6iWlcsS6Hk/UAxH9g5wohfrM4cPmrqYLq1kFW7fvkqFBD7Mv+4lUPOC48b4Hw2anm5ZlfPjWU6f4a+o5XqLWRRogK+zrNOm1UWog==" 
NoCertificadoSAT="00001000000403190844" RfcProvCertif="CVD110412TF6" 
UUID="F62EACC7-F5B0-47E9-9B97-633D7D7EF4F3" 
FechaTimbrado="2019-09-20T17:40:51" 
SelloSAT="QYUoMG7ETFeydnCkUj3xXt85Aj40hTrWJSofwdsOJJjlslEaWlpcf872DfgTFHRU/u/j4e5YtVZ22sTRkYogHTMqkitQmwNUbcvrd+t1SAj9icpX2KXX1GCGxnKhLb7p2t1WEVA77iuUTvENfMPaFDu3CZ/uL8rTuhiVtNUkk0nlYN7QajYIxihGnZ3qgcGCA7MG/2xiWjp+3HZ4G/EGY7HhLd6b9BA5Po2ymyOImGFbE4WtlXx4vsXX2g4TCHxx6jCrbHBN37KKAYwdZK85tHREFf+6tNhYC77XGxD9NfPEUBZk+FMXj+NPT2R9AaB1rFuPCv5QlXSXEdmCtrzr9g=="/>
</cfdi:Complemento>
</cfdi:Comprobante>';

//Usamos str_replace para reemplazar las palabras por espacios en blanco
$xmlGetAllData = str_replace('cfdi:', '', $xmlGetAllData);
$xmlGetAllData = str_replace('tfd:', '', $xmlGetAllData);

//Hacemos uso de simplexml_load_string para manipular el archivo xml
$xmlLoad = simplexml_load_string($xmlGetAllData);

//Creacion de las variables que contienen los datos requeridos
$getRfcEmisorFromXml= $xmlLoad->Emisor->attributes()['Rfc'];
$getNombreEmisorFromXml = $xmlLoad->Emisor->attributes()['Nombre'];
$getUuidFromXml = $xmlLoad->Complemento->TimbreFiscalDigital->attributes()['UUID'];
$getFechaTimbradoFromXml = $xmlLoad->Complemento->TimbreFiscalDigital->attributes()['FechaTimbrado'];

//Imprimiendo los valores de la variable correspondiente
echo("Del nodo Emisor... ");
echo"<br>";
print_r("RFC: ".$getRfcEmisorFromXml);
echo"<br>";
print_r("Nombre: ".$getNombreEmisorFromXml);
echo"<br>";
echo("Del nodo TimbreFiscalDigital... ");
echo"<br>";
print_r("UUID: ".$getUuidFromXml);
echo"<br>";
print_r("Fecha de Timbrado: ".$getFechaTimbradoFromXml);


?>