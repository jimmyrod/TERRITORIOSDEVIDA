# Website Completo Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Build an installable, lightweight WordPress theme for Territorios de Vida Pastaza with a complete institutional homepage, internal templates, custom post types, accessibility, SEO, image credits, and publication docs.

**Architecture:** The repository has no WordPress installation, so implementation creates a self-contained theme under `wp-content/themes/territorios-de-vida/`. PHP files register theme support, menus, assets, CPTs, SEO metadata, security hardening, metaboxes, and templates; CSS and JavaScript remain theme-local and minimal.

**Tech Stack:** WordPress PHP theme, semantic HTML templates, CSS custom properties, vanilla JavaScript, Python validation script, optional local static preview for visual QA.

---

### Task 1: Baseline Validation

**Files:**
- Create: `scripts/validate_theme.py`
- Create: `docs/superpowers/plans/2026-06-28-website-completo.md`

- [x] **Step 1: Write the failing validation test**

The validator checks the theme directory, required WordPress files, required section partials, CSS tokens, JavaScript accessibility hooks, CPT registrations, SEO schema, docs, image credits, and copied official PDFs.

- [ ] **Step 2: Run validation to verify it fails**

Run: `python scripts/validate_theme.py`
Expected: failure because `wp-content/themes/territorios-de-vida/` does not exist yet.

### Task 2: Theme Skeleton

**Files:**
- Create: `wp-content/themes/territorios-de-vida/style.css`
- Create: `wp-content/themes/territorios-de-vida/functions.php`
- Create: `wp-content/themes/territorios-de-vida/theme.json`
- Create: `wp-content/themes/territorios-de-vida/header.php`
- Create: `wp-content/themes/territorios-de-vida/footer.php`
- Create: `wp-content/themes/territorios-de-vida/front-page.php`
- Create: `wp-content/themes/territorios-de-vida/index.php`
- Create: `wp-content/themes/territorios-de-vida/page.php`
- Create: `wp-content/themes/territorios-de-vida/single.php`
- Create: `wp-content/themes/territorios-de-vida/archive.php`
- Create: `wp-content/themes/territorios-de-vida/404.php`

- [ ] **Step 1: Implement required theme files**

Create a valid WordPress theme header, load `inc/*.php` from `functions.php`, add core template files, and keep output escaped.

- [ ] **Step 2: Run validation**

Run: `python scripts/validate_theme.py`
Expected: remaining failures for missing sections, CSS, JS, docs, and data files.

### Task 3: WordPress Feature Modules

**Files:**
- Create: `wp-content/themes/territorios-de-vida/inc/setup.php`
- Create: `wp-content/themes/territorios-de-vida/inc/enqueue.php`
- Create: `wp-content/themes/territorios-de-vida/inc/cpt.php`
- Create: `wp-content/themes/territorios-de-vida/inc/helpers.php`
- Create: `wp-content/themes/territorios-de-vida/inc/seo.php`
- Create: `wp-content/themes/territorios-de-vida/inc/security.php`
- Create: `wp-content/themes/territorios-de-vida/inc/metaboxes.php`
- Create: `wp-content/themes/territorios-de-vida/inc/seed-data.php`

- [ ] **Step 1: Register theme support, menus, assets, CPTs, taxonomies, SEO JSON-LD, safe SVG helper, security filters, and optional seed data**

Implement `title-tag`, thumbnails, HTML5, responsive embeds, editor styles, custom logo, `primary` and `footer` menus, `noticia`, `documento_transparencia`, `programa_pei`, `nacionalidad`, `miembro_directorio`, and requested taxonomies.

- [ ] **Step 2: Run validation and PHP lint**

Run: `python scripts/validate_theme.py`
Expected: PHP modules pass syntax checks when PHP is available.

### Task 4: Homepage Sections And Templates

**Files:**
- Create: `wp-content/themes/territorios-de-vida/template-parts/hero.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-about.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-aedspp.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-governance.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-nationalities.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-pei.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-biodiversity.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-transparency.php`
- Create: `wp-content/themes/territorios-de-vida/template-parts/section-contact.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-quienes-somos.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-aedspp.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-programas.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-transparencia.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-noticias.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-contacto.php`
- Create: `wp-content/themes/territorios-de-vida/page-templates/page-nacionalidades.php`

- [ ] **Step 1: Build semantic sections**

Use the supplied Spanish content, preserve official names and dates, keep the budget discrepancy visibly documented with a production validation comment, and provide accessible accordions, map fallback text, document portal, news cards, and contact form shell.

- [ ] **Step 2: Run validation**

Run: `python scripts/validate_theme.py`
Expected: remaining failures only for assets or docs not yet created.

### Task 5: Assets, Documentation, And QA

**Files:**
- Create: `wp-content/themes/territorios-de-vida/assets/css/main.css`
- Create: `wp-content/themes/territorios-de-vida/assets/js/main.js`
- Create: `wp-content/themes/territorios-de-vida/assets/js/map.js`
- Create: `wp-content/themes/territorios-de-vida/assets/icons/*.svg`
- Create: `wp-content/themes/territorios-de-vida/assets/geojson/README.md`
- Create: `wp-content/themes/territorios-de-vida/assets/documents/*.pdf`
- Create: `wp-content/themes/territorios-de-vida/assets/image-credits.json`
- Create: `wp-content/themes/territorios-de-vida/docs/admin-guide.md`
- Create: `wp-content/themes/territorios-de-vida/docs/image-credits.md`
- Create: `wp-content/themes/territorios-de-vida/docs/deployment-checklist.md`
- Create: `wp-content/themes/territorios-de-vida/docs/performance-accessibility-checklist.md`
- Create: `wp-content/themes/territorios-de-vida/README.md`

- [ ] **Step 1: Add CSS, JS, icon assets, document copies, credits, and docs**

Implement the required tokens, responsive layout, focus states, reduced-motion support, mobile nav, active section observer, accessible accordions, transparency filters, optional map loader, and documentation.

- [ ] **Step 2: Run final validation**

Run: `python scripts/validate_theme.py`
Expected: all checks pass.

- [ ] **Step 3: Run browser/static responsive QA**

Serve a static preview or theme-rendered preview, check desktop and mobile screenshots, and fix clipping, overlap, contrast, and text wrapping issues found.
