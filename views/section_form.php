<?php
declare(strict_types=1);

$savedData = getSectionData($sectionKey);
?>

<section class="form-card">
    <h2><?= htmlspecialchars($sectionTitle) ?></h2>
    <p><?= htmlspecialchars($sectionSubtitle) ?></p>

    <?php if (isset($_GET['guardado']) && $_GET['guardado'] === '1'): ?>
        <div class="status-banner">Seccion guardada correctamente.</div>
    <?php endif; ?>

    <form method="post" action="index.php?seccion=<?= htmlspecialchars($sectionKey) ?>">
        <input type="hidden" name="form_seccion" value="<?= htmlspecialchars($sectionKey) ?>">

        <?php foreach ($fields as $field): ?>
            <?php
            $name = $field['name'];
            $label = $field['label'];
            $type = $field['type'] ?? 'textarea';
            $placeholder = $field['placeholder'] ?? '';
            $value = isset($savedData[$name]) ? (string) $savedData[$name] : '';
            ?>
            <div>
                <label for="<?= htmlspecialchars($name) ?>"><?= htmlspecialchars($label) ?></label>
                <?php if ($type === 'text'): ?>
                    <input
                        id="<?= htmlspecialchars($name) ?>"
                        type="text"
                        name="<?= htmlspecialchars($name) ?>"
                        placeholder="<?= htmlspecialchars($placeholder) ?>"
                        value="<?= htmlspecialchars($value) ?>"
                    >
                <?php else: ?>
                    <textarea
                        id="<?= htmlspecialchars($name) ?>"
                        name="<?= htmlspecialchars($name) ?>"
                        placeholder="<?= htmlspecialchars($placeholder) ?>"
                    ><?= htmlspecialchars($value) ?></textarea>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

        <button type="submit">Guardar Seccion</button>
    </form>
</section>
