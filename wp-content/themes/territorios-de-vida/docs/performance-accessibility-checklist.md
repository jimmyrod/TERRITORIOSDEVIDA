# Checklist de Performance y Accesibilidad

## Performance

- CSS y JS son locales y mínimos.
- No se carga jQuery.
- No hay sliders pesados.
- Imágenes principales tienen JPG y WebP.
- El hero no usa lazy loading; imágenes de tarjetas sí usan `loading="lazy"`.
- Leaflet no se carga hasta contar con capas oficiales; `map.js` solo prepara el contenedor.
- Versionado de assets con `filemtime`.
- Revisar Lighthouse en producción: Performance, Accessibility, Best Practices y SEO >= 95.

## Accesibilidad WCAG 2.1 AA

- Existe skip link.
- Header, nav, main, section, article y footer usan landmarks semánticos.
- Botón hamburguesa usa `aria-controls` y `aria-expanded`.
- Acordeones usan botones reales, `aria-controls`, `aria-expanded` y `hidden`.
- Focus visible definido con contraste alto.
- Tablas tienen `caption`, `thead`, `th scope` y contenedor desplazable con label.
- Formularios tienen labels explícitos.
- El mapa tiene alternativa textual y `role="img"`.
- No se comunica información solo mediante color.
- Animaciones respetan `prefers-reduced-motion`.

## Revisión Manual

- Navegar con teclado desde el skip link hasta el footer.
- Probar menú móvil con teclado y lector de pantalla.
- Confirmar que la tabla de presupuesto se puede desplazar en móvil.
- Revisar contraste del hero sobre la imagen final aprobada.
- Confirmar que las tarjetas de nacionalidades no usan lenguaje folclorizante.
