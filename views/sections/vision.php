<?php
declare(strict_types=1);

$sectionKey = 'vision';
$sectionTitle = '2. Vision';
$sectionSubtitle = 'Proyeccion de futuro deseado para la organizacion y su plataforma tecnologica.';
$fields = [
    ['name' => 'vision_texto', 'label' => 'Vision institucional', 'placeholder' => 'Describe el estado futuro deseado.'],
    ['name' => 'vision_horizonte', 'label' => 'Horizonte temporal', 'type' => 'text', 'placeholder' => 'Ej.: 2026-2030'],
];

include __DIR__ . '/../section_form.php';
