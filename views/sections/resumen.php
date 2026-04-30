<?php
declare(strict_types=1);

$sectionKey = 'resumen';
$sectionTitle = 'Resumen del Plan Ejecutivo';
$sectionSubtitle = 'Sintesis final de objetivos, iniciativas y resultados esperados del PETI.';
$fields = [
    ['name' => 'resumen_general', 'label' => 'Resumen general', 'placeholder' => 'Sintetiza el plan estrategico completo.'],
    ['name' => 'roadmap', 'label' => 'Roadmap de implementacion', 'placeholder' => 'Fases, hitos y plazos clave.'],
    ['name' => 'beneficios_esperados', 'label' => 'Beneficios esperados', 'placeholder' => 'Resultados esperados para negocio y TI.'],
];

include __DIR__ . '/../section_form.php';
