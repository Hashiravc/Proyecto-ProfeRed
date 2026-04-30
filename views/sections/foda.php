<?php
declare(strict_types=1);

$sectionKey = 'foda';
$sectionTitle = '5. Analisis Interno y Externo (FODA)';
$sectionSubtitle = 'Identifica fortalezas, oportunidades, debilidades y amenazas del entorno.';
$fields = [
    ['name' => 'fortalezas', 'label' => 'Fortalezas', 'placeholder' => 'Factores internos positivos.'],
    ['name' => 'oportunidades', 'label' => 'Oportunidades', 'placeholder' => 'Factores externos favorables.'],
    ['name' => 'debilidades', 'label' => 'Debilidades', 'placeholder' => 'Factores internos por mejorar.'],
    ['name' => 'amenazas', 'label' => 'Amenazas', 'placeholder' => 'Riesgos del entorno externo.'],
];

include __DIR__ . '/../section_form.php';
