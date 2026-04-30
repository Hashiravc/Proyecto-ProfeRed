<?php
declare(strict_types=1);

$sectionKey = 'valores';
$sectionTitle = '3. Valores';
$sectionSubtitle = 'Principios que guian la cultura organizacional y la toma de decisiones.';
$fields = [
    ['name' => 'valores_clave', 'label' => 'Valores clave', 'placeholder' => 'Ej.: integridad, innovacion, colaboracion.'],
    ['name' => 'conductas_observables', 'label' => 'Conductas observables', 'placeholder' => 'Ejemplos concretos de aplicacion de valores.'],
];

include __DIR__ . '/../section_form.php';
