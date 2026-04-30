<?php
declare(strict_types=1);
?>
<section class="content-card">
    <div class="intro-text">
        <p class="lead">
            El éxito de las organizaciones reside en gran parte en la capacidad de ejecutar una estrategia, su planificación y asignación de recursos. Esta aplicación te ayudará a reflexionar y estructurar el Plan Estratégico de Tecnologías de Información (PETI) para ProfeRed.
        </p>
    </div>

    <div class="section-header">INFORMACIÓN DE LA EMPRESA</div>

    <div class="intro-grid">
        <?php $i = 1; foreach ($sections as $key => $section): ?>
            <?php if (in_array($key, ['inicio','resumen'])) { continue; } ?>
            <a class="menu-card" href="index.php?seccion=<?= htmlspecialchars($key) ?>">
                <div class="card-number"><?= $i ?></div>
                <div>
                    <strong><?= htmlspecialchars($section['label']) ?></strong>
                </div>
            </a>
        <?php $i++; endforeach; ?>
    </div>

    <div class="section-header">RESUMEN DEL PLAN EJECUTIVO</div>
    <div class="summary-cta">
        <a class="menu-card large" href="index.php?seccion=resumen">
            <strong>Resumen del Plan Ejecutivo</strong>
        </a>
    </div>
</section>
