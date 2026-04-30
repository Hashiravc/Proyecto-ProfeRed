<?php
declare(strict_types=1);

$sectionKey = 'informacion_empresa';
$sectionTitle = 'Informacion de la Empresa';
$sectionSubtitle = 'Registra la base institucional y operativa de ProfeRed.';
$fields = [
    ['name' => 'nombre_empresa', 'label' => 'Nombre de la empresa', 'type' => 'text', 'placeholder' => 'Ej.: ProfeRed S.A.C.'],
    ['name' => 'descripcion_negocio', 'label' => 'Descripcion del negocio', 'placeholder' => 'Describe a que se dedica la empresa.'],
    ['name' => 'contexto_ti', 'label' => 'Contexto de TI actual', 'placeholder' => 'Estado actual de procesos, herramientas y madurez digital.'],
];

include __DIR__ . '/../section_form.php';
