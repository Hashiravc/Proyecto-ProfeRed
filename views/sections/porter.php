<?php
declare(strict_types=1);

$sectionKey = 'porter';
$sectionTitle = '8. Las 5 Fuerzas de Porter';
$sectionSubtitle = 'Evalua el nivel competitivo de la industria y su impacto estrategico.';
$fields = [
    ['name' => 'rivalidad_competidores', 'label' => 'Rivalidad entre competidores', 'placeholder' => 'Intensidad competitiva del sector.'],
    ['name' => 'amenaza_nuevos', 'label' => 'Amenaza de nuevos entrantes', 'placeholder' => 'Barreras de entrada en el mercado.'],
    ['name' => 'poder_clientes', 'label' => 'Poder de negociacion de clientes', 'placeholder' => 'Influencia de estudiantes y tutores.'],
    ['name' => 'poder_proveedores', 'label' => 'Poder de negociacion de proveedores', 'placeholder' => 'Influencia de plataformas y recursos externos.'],
    ['name' => 'productos_sustitutos', 'label' => 'Amenaza de productos sustitutos', 'placeholder' => 'Alternativas al modelo de ProfeRed.'],
];

include __DIR__ . '/../section_form.php';
