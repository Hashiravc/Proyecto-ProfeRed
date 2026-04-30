<?php
declare(strict_types=1);

$sectionKey = 'mision';
$sectionTitle = '1. Mision';
$sectionSubtitle = 'Define la razon de ser de la organizacion en su enfoque de negocio y TI.';
$fields = [
    ['name' => 'mision_texto', 'label' => 'Mision institucional', 'placeholder' => 'Redacta una mision clara y medible.'],
    ['name' => 'mision_ti', 'label' => 'Alineacion con TI', 'placeholder' => 'Explica como TI apoya la mision.'],
];

include __DIR__ . '/../section_form.php';
