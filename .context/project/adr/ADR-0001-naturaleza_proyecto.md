# ADR-0001: Naturaleza y alcance del proyecto

## Estado

Aceptada

## Fecha

2026-07-07

## Contexto

Moodle necesita un contrato HTTP que permita a consumidores externos consultar el estado operativo de una instalación. El contrato debe servir a distintos entornos de despliegue y monitorización sin incorporar dependencias de una plataforma concreta.

## Decisión

`local_health` implementa una API estándar de salud para Moodle.

Se distribuye como plugin `local` y expone sus rutas mediante el grupo `api` de Moodle. La ruta base es `/api/rest/v2/local_health/`. Los endpoints iniciales son `live`, `ready`, `health` y, opcionalmente, `info`. No se definirán rutas HTTP directas bajo `/local/health/`.

El núcleo del plugin descubre, ejecuta y agrega probes. No define por sí mismo qué condiciones hacen que una instalación esté sana. Cada endpoint aplica una política a los resultados de las probes y a la configuración de la instalación.

## Terminología

Una **probe** es una comprobación puntual de una capacidad del sistema, por ejemplo la conectividad con la base de datos, el acceso a `moodledata`, Redis, la API de bloqueos, LDAP, SMTP o un servicio externo.

El núcleo no asigna prioridades ni criticidad a las probes.

## Consecuencias

- La API no depende de Kubernetes, OpenShift ni de otros consumidores concretos.
- Las probes pueden evolucionar como extensiones independientes del núcleo.
- Las políticas de disponibilidad se definen por endpoint y configuración, no mediante reglas fijas en el framework.
- El proyecto no incorpora persistencia histórica, métricas temporales, paneles, gráficas, alertas ni integraciones directas con plataformas de observabilidad.
