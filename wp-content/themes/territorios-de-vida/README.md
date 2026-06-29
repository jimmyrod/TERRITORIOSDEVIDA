# Territorios de Vida - Tema WordPress

Tema institucional instalable para el Consorcio para la Gestión Ambiental del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza.

## Decisiones Técnicas

- Tema custom ligero en `wp-content/themes/territorios-de-vida/`, porque el repositorio no contenía instalación WordPress, `wp-content`, tema activo, plugins, `composer.json`, `package.json` ni `wp-config.php`.
- Sin dependencia obligatoria de Elementor, ACF, jQuery ni librerías pesadas.
- Homepage modular con `template-parts/` y plantillas internas para Quiénes Somos, AEDSPP, Programas, Transparencia, Noticias, Contacto y Nacionalidades.
- Custom post types: `noticia`, `documento_transparencia`, `programa_pei`, `nacionalidad`, `miembro_directorio`.
- Taxonomías: `categoria_noticia`, `tipo_documento`, `eje_estrategico`, `tipo_actor`.
- Metaboxes simples nativos para datos institucionales, sin bloquear una futura migración a ACF.
- SEO técnico nativo con meta description, Open Graph, Twitter Cards y JSON-LD `GovernmentOrganization`, `WebSite`, `BreadcrumbList`, `NewsArticle` y `DigitalDocument`.
- Formulario de contacto preparado como interfaz, sin envío real hasta confirmar SMTP, antispam y política de tratamiento de datos.
- Mapa AEDSPP preparado para GeoJSON local; mientras no existan capas oficiales se muestra fallback accesible.

## Instalación

1. Copiar la carpeta `wp-content/themes/territorios-de-vida/` dentro de la instalación WordPress.
2. En WordPress, ir a Apariencia -> Temas y activar `Territorios de Vida`.
3. Crear una página llamada `Inicio`, asignar la plantilla por defecto o dejar que `front-page.php` renderice la homepage.
4. En Ajustes -> Lectura, seleccionar `Una página estática` y elegir `Inicio` como portada.
5. Crear menús en Apariencia -> Menús y asignarlos a `Menú principal` y `Menú de pie de página`.
6. Revisar los documentos de `assets/documents/` y reemplazar los TODO por PDFs oficiales definitivos cuando corresponda.

## Plugins Opcionales

- SMTP seguro: WP Mail SMTP, FluentSMTP o equivalente institucional.
- Antispam: Cloudflare Turnstile o reCAPTCHA, solo tras revisar privacidad.
- SEO avanzado: Yoast SEO o Rank Math si el equipo editorial ya los usa.
- Seguridad: plugin de cabeceras/firewall si el hosting no las administra.
- Campos avanzados: ACF Pro si se decide administrar cada sección desde campos editoriales.

Ningún plugin es obligatorio para que el tema se instale y renderice.

## Validación

Desde la raíz del repositorio:

```powershell
python scripts/validate_theme.py
```

El validador revisa estructura del tema, tokens CSS, JS accesible, CPTs, taxonomías, schema, documentos PDF y créditos de imágenes.

## TODO Antes de Producción

- Confirmar el valor final de presupuesto: el PEI extraído contiene `$3.662.061,11`; la propuesta web incluye tabla con `$3.682.061,11`.
- Reemplazar o aprobar formalmente las imágenes generadas por el cliente.
- Cargar GeoJSON oficial del AEDSPP y zonificación.
- Confirmar SMTP, política de privacidad, antispam y tratamiento de datos personales.
- Cargar POA, E-SIGEF, resoluciones y rendiciones CPCCS definitivas.
