# Guía de Administración

## Contenidos Principales

La portada se compone de secciones ancla: Inicio, Quiénes Somos, AEDSPP, Gobernanza, Nacionalidades, Programas, Biodiversidad, Transparencia, Noticias y Contacto.

Para administrar contenido escalable, usar los tipos de contenido:

- Noticias: fecha, etiqueta, fuente y documento relacionado.
- Documentos de transparencia: tipo, fecha, archivo PDF, año, área responsable y estado.
- Programas PEI: eje estratégico, metas y presupuesto estimado.
- Nacionalidades: acrónimo, organización oficial, estado, Plan de Vida, territorio y proyectos.
- Miembros de directorio: rol, institución y tipo de actor.

## Menús

Crear un menú principal con:

- Inicio -> `/#inicio`
- Quiénes Somos -> `/#quienes-somos`
- AEDSPP -> `/#aedspp`
- Programas -> `/#programas`
- Transparencia -> `/#transparencia`
- Noticias -> `/#noticias`
- Contacto -> `/#contacto`

Asignarlo a la ubicación `Menú principal`. Repetir o simplificar en `Menú de pie de página`.

## Documentos

Los PDFs iniciales están en `assets/documents/` para descarga. Antes de producción, revisar:

- Que cada PDF sea la versión final autorizada.
- Que el título público coincida con el archivo descargable.
- Que POA, E-SIGEF, CPCCS y resoluciones estén completos.
- Que cada documento tenga fecha, área responsable y estado.

## Contacto

El formulario no envía correos por diseño. Para habilitarlo:

1. Confirmar servidor SMTP institucional.
2. Instalar un plugin SMTP aprobado.
3. Agregar control antispam y consentimiento de privacidad.
4. Reemplazar el comportamiento placeholder por Contact Form 7, WPForms o handler propio con nonce, sanitización y registro de auditoría.

## Mapa

Colocar capas validadas en `assets/geojson/`. El tema está preparado para cargar capas futuras sin exponer APIs externas. Hasta que existan datos oficiales, se muestra el mensaje accesible "Mapa interactivo en preparación".
