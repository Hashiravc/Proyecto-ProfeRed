<?php
declare(strict_types=1);

$sectionKey = 'objetivos';
$sectionTitle = '4. Objetivos';
$sectionSubtitle = 'Define objetivos estrategicos de negocio y de tecnologias de informacion.';
$fields = [
    ['name' => 'objetivo_general', 'label' => 'Objetivo general', 'placeholder' => 'Objetivo principal del PETI.'],
    ['name' => 'objetivos_especificos', 'label' => 'Objetivos especificos', 'placeholder' => 'Lista objetivos concretos y medibles.'],
    ['name' => 'indicadores', 'label' => 'Indicadores de seguimiento', 'placeholder' => 'KPI para medir el cumplimiento.'],
];

include __DIR__ . '/../section_form.php';
