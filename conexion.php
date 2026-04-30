<?php
declare(strict_types=1);

function getConnection(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $dbHost = getenv('DB_HOST') ?: '127.0.0.1';
    $dbPort = getenv('DB_PORT') ?: '3306';
    $dbName = getenv('DB_NAME') ?: 'peti_profered';
    $dbUser = getenv('DB_USER') ?: 'root';
    $dbPass = getenv('DB_PASS') ?: '';

    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $dbHost, $dbPort, $dbName);

    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    initializeSchema($pdo);

    return $pdo;
}

function initializeSchema(PDO $pdo): void
{
    $sql = <<<SQL
        CREATE TABLE IF NOT EXISTS peti_secciones (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            seccion VARCHAR(120) NOT NULL UNIQUE,
            data_json JSON NOT NULL,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    $pdo->exec($sql);
}

function getSectionData(string $section): array
{
    $pdo = getConnection();

    $stmt = $pdo->prepare('SELECT data_json FROM peti_secciones WHERE seccion = :seccion LIMIT 1');
    $stmt->execute(['seccion' => $section]);
    $row = $stmt->fetch();

    if (!$row) {
        return [];
    }

    $decoded = json_decode((string) $row['data_json'], true);

    return is_array($decoded) ? $decoded : [];
}

function saveSectionData(string $section, array $payload): bool
{
    $pdo = getConnection();

    $stmt = $pdo->prepare(
        'INSERT INTO peti_secciones (seccion, data_json) VALUES (:seccion, :data_json)
        ON DUPLICATE KEY UPDATE data_json = VALUES(data_json), updated_at = CURRENT_TIMESTAMP'
    );

    return $stmt->execute([
        'seccion' => $section,
        'data_json' => json_encode($payload, JSON_UNESCAPED_UNICODE),
    ]);
}
