# Reporte de Verificación

Fecha de verificación: 2026-06-28

## Comandos Ejecutados

```powershell
python scripts/validate_theme.py
```

Resultado:

```text
SKIP: PHP binary not found; PHP syntax lint skipped
PASS: Theme validation checks completed
```

El validador confirmó:

- Estructura completa del tema.
- Archivos base de WordPress.
- Secciones de homepage.
- Plantillas internas.
- Tokens CSS institucionales.
- JavaScript de menú, navegación activa, acordeones y filtros.
- CPTs y taxonomías.
- Schema SEO.
- Documentos PDF copiados.
- Créditos de imágenes.

## Verificación PHP Alternativa

El entorno local no tiene `php.exe`, por lo que no se pudo ejecutar `php -l`. Para cubrir sintaxis PHP con una herramienta disponible, se instaló temporalmente `php-parser` en `tmp/php-parse` y se parsearon todos los archivos PHP del tema con Node.

Resultado:

```text
PASS: parsed 33 PHP files with php-parser
```

La carpeta temporal usada para esta verificación no forma parte del tema ni del ZIP.

## QA Visual

Se usaron capturas headless de Microsoft Edge/Google Chrome sobre `preview/static-home.html`, que replica el sistema visual del tema para revisar:

- Hero desktop.
- Hero móvil.
- Wrapping de textos largos.
- CTAs en móvil.
- Estadísticas del hero.
- Relación visual con el concepto `assets/concepts/concept-hero-header.png`.

Se corrigió el desborde móvil del hero y se fijó el H1 en dos líneas: `Territorios de` / `Vida`.

## Límites No Ejecutados Localmente

- No se ejecutó WordPress real porque el repositorio no contiene instalación WordPress, base de datos ni `wp-config.php`.
- No se ejecutó Lighthouse porque no hay binario ni módulo local disponible.
- No se ejecutó `php -l` porque no hay binario PHP instalado; se usó parser PHP alternativo.
