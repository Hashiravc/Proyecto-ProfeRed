<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web PETI - ProfeRed</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="background-layer"></div>
    <header class="site-header">
        <div class="brand-block">
            <div class="logo-mark left">
                <img src="media/logo-upt.png" alt="Logo UPT" onerror="this.style.display='none'; this.parentNode.innerHTML='<span>UPT</span>';">
            </div>
            <div class="title-banner">
                <p class="overline">Sistema Web PETI - ProfeRed</p>
                <h1>Cómo elaborar un Plan Estratégico de Tecnologías de Información - PETI</h1>
            </div>
            <div class="logo-mark right">
                <img src="media/logo-right.png" alt="Logo derecho" onerror="this.style.display='none'; this.parentNode.innerHTML='<span>EPIS</span>';">
            </div>
        </div>

        <!-- Menú principal: se utiliza el panel central con tarjetas. -->
    </header>

    <div class="app-layout">
        <aside class="sidebar">
            <h2>Vista Actual</h2>
            <p class="sidebar-eyebrow">Navegacion del sistema</p>
            <div class="current-card">
                <strong>
                    <?= htmlspecialchars($sections[$currentSection]['label'] ?? 'Panel PETI') ?>
                </strong>
                <span>
                    <?= $currentSection === 'inicio' ? 'Selecciona una seccion para comenzar.' : 'Edita y guarda la informacion estrategica de esta seccion.' ?>
                </span>
            </div>
            <?php if (($currentSection ?? 'inicio') !== 'inicio'): ?>
                <a class="quick-link" href="index.php">Ir al panel principal</a>
            <?php endif; ?>
        </aside>

        <main class="content-area">
