<?php
declare(strict_types=1);

$sectionKey = 'matriz_participacion';
$sectionTitle = '7. Matriz de Participacion';
$sectionSubtitle = 'Analiza posicion relativa de servicios y oportunidades de crecimiento.';
$fields = [
    ['name' => 'servicios_actuales', 'label' => 'Servicios evaluados', 'placeholder' => 'Enumera productos o servicios de ProfeRed.'],
    ['name' => 'participacion_mercado', 'label' => 'Participacion de mercado', 'placeholder' => 'Datos estimados de participacion por servicio.'],
    ['name' => 'estrategia_crecimiento', 'label' => 'Estrategia por cuadrante', 'placeholder' => 'Decisiones para invertir, mantener o retirar.'],
];

include __DIR__ . '/../section_form.php';
