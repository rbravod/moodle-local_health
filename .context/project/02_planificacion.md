# Plan inicial de implementación

Este plan ordena el trabajo inicial. No sustituye las decisiones pendientes de los ADR ni establece fechas de entrega.

## Arquitectura

- Definir las interfaces de probe, resultado, agregador y registro.
- Definir el tipo de extensión para las probes.
- Especificar el contrato JSON y los códigos HTTP.

## Endpoints básicos

- Implementar el grupo de rutas `api`.
- Implementar `GET /api/rest/v2/local_health/live`.
- Implementar el motor de ejecución con una probe mínima.
- Implementar `GET /api/rest/v2/local_health/ready`.

## Extensibilidad y validación

- Implementar una primera probe de base de datos.
- Definir el mecanismo de descubrimiento y registro.
- Añadir probes de `moodledata`, caché o bloqueos según las decisiones de política.
- Documentar la creación de una probe por terceros.
- Revisar la API desde la perspectiva de un consumidor externo.
