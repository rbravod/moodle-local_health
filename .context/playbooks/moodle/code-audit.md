---
version: 0.1.0
license: CC-BY-SA-4.0
copyright: © 2026 Roberto Bravo
---
# Auditoría de código Moodle

## Propósito

Este playbook define el procedimiento para auditar código Moodle, identificar riesgos y deuda técnica, y proponer actuaciones priorizadas.

Debe aplicarse junto con `technical-work.md`, que contiene los criterios generales para el trabajo técnico en Moodle.

Una auditoría produce un diagnóstico. No autoriza por sí misma la modificación del código auditado.

## Delimitación de la auditoría

Antes de comenzar, determinar:

- objetivo de la auditoría;
- componentes y versiones afectadas;
- alcance incluido y excluido;
- contexto del proyecto aplicable;
- código, configuración, pruebas y documentación disponibles;
- limitaciones que puedan afectar a las conclusiones.

No presentar como completa una auditoría cuyo alcance o evidencia sean parciales.

## Diagnóstico antes que solución

Examinar primero el comportamiento y la estructura existentes.

Para cada posible problema:

1. localizar evidencia concreta;
2. explicar qué se ha observado;
3. distinguir el hecho de su interpretación;
4. determinar sus consecuencias técnicas u operativas;
5. valorar su severidad;
6. proponer una actuación únicamente después del diagnóstico.

No asumir que una solución es incorrecta por ser antigua, poco elegante o diferente de la práctica habitual.

## Áreas de revisión

Según el alcance, revisar:

- corrección funcional;
- seguridad y protección de datos;
- uso de APIs y convenciones de Moodle;
- arquitectura y separación de responsabilidades;
- mantenibilidad y capacidad de evolución;
- compatibilidad con actualizaciones;
- rendimiento y escalabilidad;
- acceso a datos;
- tareas programadas, colas y procesos asíncronos;
- integraciones y dependencias externas;
- gestión de errores y fallos parciales;
- pruebas automatizadas;
- despliegue, configuración y operación.

Revisar únicamente las áreas pertinentes para la auditoría concreta.

## Hallazgos

Cada hallazgo debe contener, cuando resulte aplicable:

- evidencia y localización;
- descripción del problema;
- consecuencias;
- severidad;
- recomendación;
- momento de actuación;
- incertidumbres o información pendiente.

No convertir preferencias de estilo sin impacto demostrado en hallazgos de riesgo.

## Severidad

Clasificar los riesgos como:

- **Alta:** puede provocar un impacto grave en seguridad, integridad, disponibilidad, corrección, operación o capacidad de actualización y requiere atención prioritaria.
- **Media:** introduce un riesgo relevante o una degradación significativa de mantenibilidad o evolución, sin exigir necesariamente una intervención inmediata.
- **Baja:** tiene impacto limitado, localizado o principalmente preventivo.

La severidad debe justificarse atendiendo al impacto, la probabilidad y la exposición observada. No confundir severidad con facilidad de corrección.

Cuando no exista evidencia suficiente, indicar la incertidumbre en lugar de asignar una severidad concluyente.

## Deuda técnica y problemas sistémicos

Además de los defectos aislados, buscar patrones como:

- duplicación significativa;
- responsabilidades mal delimitadas;
- dependencias rígidas;
- uso recurrente de APIs obsoletas o inadecuadas;
- ausencia de pruebas en zonas críticas;
- soluciones temporales convertidas en permanentes;
- dificultades previsibles para actualizar Moodle;
- fragilidad repetida en integraciones u operación.

Estos patrones deben tratarse inicialmente como hipótesis y sostenerse con evidencia suficiente antes de declararlos deuda técnica.

## Priorización

Separar las recomendaciones en:

### Correcciones inmediatas

Actuaciones necesarias para reducir riesgos actuales importantes o resolver defectos que afectan directamente al sistema.

### Evolución planificada

Mejoras que aumentan la mantenibilidad, reducen deuda o facilitan cambios futuros, pero que no requieren una intervención inmediata.

Indicar dependencias entre actuaciones y evitar recomendar una reescritura general cuando puedan aplicarse cambios incrementales seguros.

## Informe de auditoría

Presentar los resultados con esta estructura cuando resulte adecuada:

1. resumen ejecutivo;
2. alcance y limitaciones;
3. hallazgos ordenados por severidad;
4. problemas transversales;
5. correcciones inmediatas;
6. evolución planificada;
7. aspectos no verificados.

Evitar listas extensas de observaciones sin explicar su impacto ni establecer prioridades.

## Verificación

Utilizar las herramientas de análisis y validación apropiadas definidas en `technical-work.md`.

Distinguir entre:

- problemas confirmados;
- riesgos fundamentados;
- hipótesis pendientes de comprobación;
- áreas no revisadas.

No afirmar que una ausencia de hallazgos demuestra la ausencia de problemas fuera del alcance o de las técnicas utilizadas.
