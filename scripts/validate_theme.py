from __future__ import annotations

import json
import shutil
import subprocess
import sys
from pathlib import Path


ROOT = Path(__file__).resolve().parents[1]
THEME = ROOT / "wp-content" / "themes" / "territorios-de-vida"


REQUIRED_FILES = [
    "style.css",
    "functions.php",
    "theme.json",
    "front-page.php",
    "header.php",
    "footer.php",
    "index.php",
    "page.php",
    "single.php",
    "archive.php",
    "404.php",
    "inc/setup.php",
    "inc/enqueue.php",
    "inc/cpt.php",
    "inc/helpers.php",
    "inc/seo.php",
    "inc/security.php",
    "inc/metaboxes.php",
    "inc/seed-data.php",
    "assets/css/main.css",
    "assets/js/main.js",
    "assets/js/map.js",
    "assets/image-credits.json",
    "assets/geojson/README.md",
    "README.md",
    "docs/admin-guide.md",
    "docs/image-credits.md",
    "docs/deployment-checklist.md",
    "docs/performance-accessibility-checklist.md",
]

SECTION_PARTS = [
    "template-parts/hero.php",
    "template-parts/section-about.php",
    "template-parts/section-aedspp.php",
    "template-parts/section-governance.php",
    "template-parts/section-nationalities.php",
    "template-parts/section-pei.php",
    "template-parts/section-biodiversity.php",
    "template-parts/section-transparency.php",
    "template-parts/section-contact.php",
]

PAGE_TEMPLATES = [
    "page-templates/page-quienes-somos.php",
    "page-templates/page-aedspp.php",
    "page-templates/page-programas.php",
    "page-templates/page-transparencia.php",
    "page-templates/page-noticias.php",
    "page-templates/page-contacto.php",
    "page-templates/page-nacionalidades.php",
]

CSS_TOKENS = [
    "--color-selva-oscuro: #1B4332",
    "--color-bosque-medio: #2D6A4F",
    "--color-hoja: #52B788",
    "--color-menta: #D8F3DC",
    "--color-dorado-tierra: #C8961E",
    "--color-cafe-tierra: #7A4A1E",
    "--color-azul-agua: #219EBC",
    "--color-naranja: #F4A261",
]

REQUIRED_CPTS = [
    "noticia",
    "documento_transparencia",
    "programa_pei",
    "nacionalidad",
    "miembro_directorio",
]

REQUIRED_TAXONOMIES = [
    "categoria_noticia",
    "tipo_documento",
    "eje_estrategico",
    "tipo_actor",
]

OFFICIAL_DOCUMENTS = [
    "Propuesta_Web_v2_Territorios_de_Vida_Pastaza.pdf",
    "ORDENANZA_N92_0001.pdf",
    "estatuto_consorcio_aedsppz.pdf",
    "PLAN_ESTRATEGICO_INSTITUCIONAL_2026-2029.pdf",
    "brochure_pastaza_3_jul_15h08.pdf",
]

CONTENT_MARKERS = [
    "Territorios de Vida",
    "Registro Oficial N.° 763",
    "2.541.836",
    "Consejo Plurinacional",
    "Plan Estratégico Institucional 2026",
    "Mapa interactivo en preparación",
    "TODO: Confirmar valor final del presupuesto",
]


def fail(message: str) -> None:
    print(f"FAIL: {message}")
    raise SystemExit(1)


def assert_exists(relative: str) -> Path:
    path = THEME / relative
    if not path.exists():
        fail(f"Missing required file: {path.relative_to(ROOT)}")
    return path


def read(relative: str) -> str:
    return assert_exists(relative).read_text(encoding="utf-8")


def main() -> int:
    if not THEME.exists():
        fail(f"Missing theme directory: {THEME.relative_to(ROOT)}")

    for relative in REQUIRED_FILES + SECTION_PARTS + PAGE_TEMPLATES:
        assert_exists(relative)

    css = read("assets/css/main.css")
    for token in CSS_TOKENS:
        if token not in css:
            fail(f"Missing CSS token: {token}")
    for required_css in ["prefers-reduced-motion", ":focus-visible", "@media (max-width"]:
        if required_css not in css:
            fail(f"Missing CSS accessibility/responsive rule: {required_css}")

    js = read("assets/js/main.js")
    for required_js in ["aria-expanded", "IntersectionObserver", "data-accordion-trigger"]:
        if required_js not in js:
            fail(f"Missing JS behavior marker: {required_js}")

    cpt = read("inc/cpt.php")
    for post_type in REQUIRED_CPTS:
        if post_type not in cpt:
            fail(f"Missing custom post type registration marker: {post_type}")
    for taxonomy in REQUIRED_TAXONOMIES:
        if taxonomy not in cpt:
            fail(f"Missing taxonomy registration marker: {taxonomy}")

    setup = read("inc/setup.php")
    for marker in ["title-tag", "post-thumbnails", "custom-logo", "primary", "footer"]:
        if marker not in setup:
            fail(f"Missing theme setup marker: {marker}")

    seo = read("inc/seo.php")
    for marker in ["GovernmentOrganization", "WebSite", "BreadcrumbList"]:
        if marker not in seo:
            fail(f"Missing SEO schema marker: {marker}")

    combined = "\n".join((THEME / path).read_text(encoding="utf-8") for path in SECTION_PARTS)
    for marker in CONTENT_MARKERS:
        if marker not in combined:
            fail(f"Missing content marker in sections: {marker}")

    credits = assert_exists("assets/image-credits.json")
    try:
        credit_data = json.loads(credits.read_text(encoding="utf-8"))
    except json.JSONDecodeError as exc:
        fail(f"Invalid image credits JSON: {exc}")
    if not isinstance(credit_data, list) or len(credit_data) < 4:
        fail("image-credits.json must list at least 4 credited or generated assets")
    for item in credit_data:
        for key in ["file", "source", "license", "alt"]:
            if key not in item or not str(item[key]).strip():
                fail(f"Image credit item missing {key}: {item}")

    for document in OFFICIAL_DOCUMENTS:
        path = THEME / "assets" / "documents" / document
        if not path.exists() or path.stat().st_size < 1024:
            fail(f"Missing copied official PDF: {path.relative_to(ROOT)}")

    php = shutil.which("php")
    if php:
        for php_file in THEME.rglob("*.php"):
            result = subprocess.run([php, "-l", str(php_file)], capture_output=True, text=True)
            if result.returncode != 0:
                fail(f"PHP lint failed for {php_file.relative_to(ROOT)}: {result.stdout}{result.stderr}")
    else:
        print("SKIP: PHP binary not found; PHP syntax lint skipped")

    print("PASS: Theme validation checks completed")
    return 0


if __name__ == "__main__":
    sys.exit(main())
