<?php
declare(strict_types=1);

$sectionKey = 'pest';
$sectionTitle = '9. PEST';
$sectionSubtitle = 'Analisis del entorno politico, economico, social y tecnologico.';
$fields = [
    ['name' => 'factor_politico', 'label' => 'Factor politico', 'placeholder' => 'Normativa y contexto legal aplicable.'],
    ['name' => 'factor_economico', 'label' => 'Factor economico', 'placeholder' => 'Tendencias economicas del mercado objetivo.'],
    ['name' => 'factor_social', 'label' => 'Factor social', 'placeholder' => 'Comportamientos y necesidades de usuarios.'],
    ['name' => 'factor_tecnologico', 'label' => 'Factor tecnologico', 'placeholder' => 'Tecnologias emergentes y madurez digital.'],
];

include __DIR__ . '/../section_form.php';
