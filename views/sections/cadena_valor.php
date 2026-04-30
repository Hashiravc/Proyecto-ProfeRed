<?php
declare(strict_types=1);

$sectionKey = 'cadena_valor';
$sectionTitle = '6. Cadena de Valor';
$sectionSubtitle = 'Describe las actividades primarias y de apoyo que generan valor.';
$fields = [
    ['name' => 'actividades_primarias', 'label' => 'Actividades primarias', 'placeholder' => 'Operaciones principales del servicio educativo.'],
    ['name' => 'actividades_apoyo', 'label' => 'Actividades de apoyo', 'placeholder' => 'RRHH, infraestructura, tecnologia y compras.'],
    ['name' => 'brechas_ti', 'label' => 'Brechas detectadas en TI', 'placeholder' => 'Problemas tecnologicos que impactan la cadena de valor.'],
];

include __DIR__ . '/../section_form.php';
