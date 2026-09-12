# local_health

## Propósito

`local_health` es un plugin local de Moodle que proporcionará una API HTTP para consultar el estado operativo de una instalación.

El plugin ofrece el marco para descubrir, ejecutar y agregar probes. No establece una política universal sobre qué condiciones determinan que una instalación esté sana.

## Alcance

El contrato HTTP se expone mediante el grupo de rutas `api` de Moodle. Los consumidores pueden ser orquestadores, sistemas de monitorización u otros servicios externos; el plugin no integra ninguna plataforma concreta.

Quedan fuera del alcance la persistencia histórica de resultados, métricas temporales, paneles, alertas e integraciones directas con plataformas de observabilidad.

## Documentación del proyecto

- `01_introduccion.md`: alcance funcional, rutas iniciales y modelo de probes.
- `adr/ADR-0001-naturaleza_proyecto.md`: naturaleza, límites y terminología del proyecto.
- `adr/ADR-0002.md`: propuesta de independencia entre probes.
- `adr/ADR-0003.md`: evaluación de atributos PHP para el descubrimiento de probes.
- `adr/ADR-0004.md`: contrato HTTP del endpoint de liveness.
- `02_planificacion.md`: secuencia inicial de implementación.
