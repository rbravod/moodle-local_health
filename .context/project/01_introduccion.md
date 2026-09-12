# local_health para Moodle

## Propósito

`local_health` proporcionará una API HTTP para determinar el estado operativo de una instalación Moodle. La comprobación de la página principal no permite distinguir de forma fiable entre una respuesta HTTP correcta y una instalación preparada para atender tráfico.

La API es independiente de Kubernetes, OpenShift y cualquier otro consumidor. Esos sistemas pueden utilizar sus respuestas para aplicar su propia política operativa.

## Rutas iniciales

El plugin utilizará el grupo de rutas `api` de Moodle. La versión inicial contempla las siguientes rutas:

- `GET /api/rest/v2/local_health/live`
- `GET /api/rest/v2/local_health/ready`
- `GET /api/rest/v2/local_health/health`
- `GET /api/rest/v2/local_health/info` opcional

No se definirán rutas HTTP directas bajo `/local/health/`.

## Contrato de liveness

`GET /api/rest/v2/local_health/live` responde `200 OK` con `Content-Type: application/json`, `Cache-Control: no-store` y el cuerpo `{"status":"UP"}`.

La ruta no acepta parámetros, no requiere autenticación ni sesión, y no ejecuta probes ni consultas a dependencias de Moodle. Un fallo de base de datos, caché u otro servicio externo corresponde a `ready`, no a `live`.

## Modelo de probes

El núcleo descubrirá, ejecutará y agregará probes registradas por extensiones. Una probe evalúa una capacidad concreta de la instalación y devuelve un resultado estructurado.

El resultado incluirá, como mínimo, un identificador, un estado, la duración de la ejecución, un mensaje y metadatos adicionales cuando proceda. La forma exacta del contrato JSON y los códigos HTTP se definirán antes de implementar los endpoints.

Las probes pueden comprobar, entre otros elementos, la base de datos, `moodledata`, caché, bloqueos, LDAP, SMTP o servicios externos. El núcleo no asigna criticidad ni define dependencias entre ellas.

## Endpoints

`live` indica si el proceso PHP puede responder y debe mantenerse ligero.

`ready` indica si el nodo puede recibir tráfico según la política configurada para la instalación.

`health` ofrece un diagnóstico agregado para operadores y sistemas de monitorización.

`info`, si se implementa, expondrá información operativa no sensible, como versiones y backends configurados.

## Extensibilidad

El mecanismo de registro y descubrimiento de probes está pendiente de definición. ADR-0002 y ADR-0003 recogen las propuestas actuales sobre independencia entre probes y uso de atributos PHP.
