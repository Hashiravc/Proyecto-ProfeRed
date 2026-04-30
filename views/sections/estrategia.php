<?php
declare(strict_types=1);

$sectionKey = 'estrategia';
$sectionTitle = '10. Identificacion de Estrategia';
$sectionSubtitle = 'Selecciona las estrategias de negocio y TI a implementar.';
$fields = [
    ['name' => 'lineamiento_estrategico', 'label' => 'Lineamiento estrategico', 'placeholder' => 'Direccion estrategica prioritaria.'],
    ['name' => 'iniciativas_ti', 'label' => 'Iniciativas de TI', 'placeholder' => 'Proyectos tecnologicos para soportar la estrategia.'],
    ['name' => 'priorizacion', 'label' => 'Criterios de priorizacion', 'placeholder' => 'Impacto, costo, tiempo y riesgo.'],
];

include __DIR__ . '/../section_form.php';
