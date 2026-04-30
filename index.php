<?php
declare(strict_types=1);

require_once __DIR__ . '/conexion.php';
$sections = require __DIR__ . '/config/secciones.php';

$currentSection = $_GET['seccion'] ?? 'inicio';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_seccion'])) {
    $formSection = (string) $_POST['form_seccion'];

    if (isset($sections[$formSection])) {
        $payload = $_POST;
        unset($payload['form_seccion']);

        saveSectionData($formSection, $payload);

        header('Location: index.php?seccion=' . urlencode($formSection) . '&guardado=1');
        exit;
    }
}

if (!isset($sections[$currentSection])) {
    $currentSection = 'inicio';
}

include __DIR__ . '/includes/header.php';

if ($currentSection === 'inicio') {
    include __DIR__ . '/views/home.php';
} else {
    include $sections[$currentSection]['file'];
}

include __DIR__ . '/includes/footer.php';
