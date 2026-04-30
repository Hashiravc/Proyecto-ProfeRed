<?php
declare(strict_types=1);

$sectionKey = 'came';
$sectionTitle = '11. Matriz CAME';
$sectionSubtitle = 'Deriva acciones estrategicas para corregir, afrontar, mantener y explotar.';
$fields = [
    ['name' => 'corregir', 'label' => 'Corregir debilidades', 'placeholder' => 'Acciones para corregir debilidades detectadas.'],
    ['name' => 'afrontar', 'label' => 'Afrontar amenazas', 'placeholder' => 'Acciones para mitigar amenazas externas.'],
    ['name' => 'mantener', 'label' => 'Mantener fortalezas', 'placeholder' => 'Acciones para consolidar fortalezas internas.'],
    ['name' => 'explotar', 'label' => 'Explotar oportunidades', 'placeholder' => 'Acciones para aprovechar oportunidades del mercado.'],
];

include __DIR__ . '/../section_form.php';
