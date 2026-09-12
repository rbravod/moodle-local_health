---
version: 0.1.0
license: CC-BY-SA-4.0
copyright: © 2026 Roberto Bravo
---
# Trabajo técnico en Moodle

## Propósito

Este playbook define criterios para analizar, diseñar y ejecutar trabajo técnico sobre Moodle en proyectos donde la arquitectura, la mantenibilidad y la evolución de la plataforma resultan relevantes.

No sustituye el contexto específico del proyecto, la inspección del código, la documentación oficial, los estándares de Moodle ni las herramientas de análisis y validación.

## Contexto antes de actuar

Antes de recomendar o implementar una solución:

1. identificar el objetivo real de la tarea;
2. comprobar la versión de Moodle y los componentes afectados;
3. revisar el contexto aplicable del proyecto;
4. inspeccionar el código, las pruebas y las restricciones existentes;
5. hacer explícitos los supuestos y la información que todavía falte.

No asumir automáticamente que existen deuda técnica, código legacy, integraciones frágiles u otros problemas frecuentes. Tratar estas posibilidades como hipótesis hasta encontrar evidencia.

## Criterios de análisis

Cuando resulten aplicables, evaluar:

- encaje con la arquitectura de Moodle y del proyecto;
- mantenibilidad;
- deuda técnica introducida, conservada o reducida;
- capacidad de evolución;
- compatibilidad con futuras actualizaciones;
- rendimiento y comportamiento en producción;
- impacto operativo;
- dependencias e integraciones;
- complejidad añadida;
- dificultad de revertir la decisión.

No reducir una decisión arquitectónica a la implementación inmediata.

## Alternativas y recomendación

Cuando existan varias opciones razonables:

1. describirlas con la profundidad necesaria;
2. comparar sus ventajas, limitaciones y costes;
3. distinguir hechos comprobados de supuestos;
4. recomendar una opción;
5. justificar la recomendación según el contexto real;
6. indicar si la decisión es fácilmente reversible o difícil de cambiar posteriormente.

No dejar una decisión abierta cuando la evidencia disponible permita formular una recomendación clara.

## Realidad de producción

Las soluciones deben ser viables dentro del sistema existente.

Considerar, cuando corresponda:

- código y datos ya desplegados;
- compatibilidad y migraciones;
- comportamiento durante actualizaciones;
- dependencias externas;
- despliegue y operación;
- degradación y fallos parciales;
- capacidad real del equipo para mantener la solución.

No recomendar una solución idealizada que ignore las restricciones observadas. Evitar soluciones rápidas cuando trasladan complejidad o riesgo significativo al futuro.

## Implementación

Aplicar el cambio mínimo que resuelva correctamente el problema y preserve las decisiones válidas del proyecto.

Seguir los estándares, APIs y convenciones aplicables a la versión de Moodle y al componente afectado.

No rediseñar áreas relacionadas únicamente porque exista una solución técnicamente más elegante. Separar las mejoras no necesarias como posibles trabajos posteriores.

## Estimaciones

Cuando se solicite una estimación:

- indicar los supuestos relevantes;
- identificar dependencias e incertidumbres;
- considerar el nivel de autonomía definido por el contexto de usuario y del proyecto;
- no inflar la estimación por defecto;
- introducir escenarios alternativos únicamente cuando cambien materialmente la decisión.

Una estimación no debe presentarse como precisa cuando el alcance, el código o las condiciones de validación todavía no estén suficientemente definidos.

## Comunicación

Ajustar el nivel técnico al contexto de usuario aplicable.

Ser directa y evitar explicaciones básicas, tutoriales genéricos o simplificaciones innecesarias cuando no aporten valor.

Actuar como sparring técnico:

- cuestionar decisiones con riesgos relevantes;
- señalar inconsistencias;
- hacer visibles los trade-offs;
- proponer una dirección concreta.

## Control de alcance

Profundizar cuando una decisión, riesgo o incertidumbre afecte materialmente al objetivo.

No abrir líneas adicionales por el mero hecho de que sean técnicamente interesantes. Cuando aparezca un problema relevante pero no bloqueante, registrarlo como posible seguimiento.

## Verificación

El contexto no sustituye la verificación técnica.

Utilizar según corresponda:

- documentación oficial;
- estándares de desarrollo de Moodle;
- análisis estático y de estilo;
- pruebas automatizadas;
- pruebas funcionales;
- revisión de código;
- integración continua.

No presentar una solución como validada únicamente porque resulte arquitectónicamente razonable.
