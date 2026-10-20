<?php
/**
 * includes/db.php
 * MySQL / MariaDB access (PDO) and schema — adapted from the Publishing Guru project.
 *
 * Tables are created on first use: db() checks ma_settings.schema_version once per request
 * and runs db_migrate() when the schema is missing or older than DB_SCHEMA_VERSION.
 * All values reach SQL through prepared statements.
 *
 * Unlike the admin, public pages must keep working if the database is down:
 * they call db_safe(), which logs the error and returns a fallback instead of failing.
 */

const DB_SCHEMA_VERSION = 1;

function db(): PDO
{
    static $pdo = null;
    if ($pdo) {
        return $pdo;
    }
    $dsn  = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8mb4';
    $opts = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::ATTR_TIMEOUT            => 3,
    ];
    try {
        $pdo = new PDO($dsn . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $opts);
    } catch (PDOException $e) {
        // 1049 = unknown database: create it when the user is allowed to (e.g. local XAMPP).
        if ((int) ($e->errorInfo[1] ?? 0) !== 1049) {
            throw $e;
        }
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $opts);
        $pdo->exec('CREATE DATABASE IF NOT EXISTS `' . str_replace('`', '', DB_NAME) . '` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
        $pdo->exec('USE `' . str_replace('`', '', DB_NAME) . '`');
    }
    $pdo->exec("SET time_zone = '" . date('P') . "'");

    try {
        $version = (int) $pdo->query("SELECT value FROM ma_settings WHERE name = 'schema_version'")->fetchColumn();
    } catch (PDOException $e) {
        $version = 0;
    }
    if ($version < DB_SCHEMA_VERSION) {
        db_migrate($pdo, $version);
    }
    return $pdo;
}

/** Run $fn against the database; on any DB error log it and return $fallback. */
function db_safe(callable $fn, $fallback = null)
{
    try {
        return $fn();
    } catch (Throwable $e) {
        error_log('Mark Attendance DB: ' . $e->getMessage());
        return $fallback;
    }
}

function db_query(string $sql, array $params = []): PDOStatement
{
    $stmt = db()->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}

function db_all(string $sql, array $params = []): array
{
    return db_query($sql, $params)->fetchAll();
}

function db_one(string $sql, array $params = []): ?array
{
    return db_query($sql, $params)->fetch() ?: null;
}

function db_value(string $sql, array $params = [])
{
    return db_query($sql, $params)->fetchColumn();
}

function db_migrate(PDO $pdo, int $from): void
{
    $pdo->exec("CREATE TABLE IF NOT EXISTS ma_settings (
        name  VARCHAR(64) NOT NULL PRIMARY KEY,
        value TEXT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    if ($from < 1) {
        $pdo->exec("CREATE TABLE IF NOT EXISTS ma_queries (
            id           INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            created_at   DATETIME NOT NULL,
            name         VARCHAR(100) NOT NULL,
            email        VARCHAR(254) NOT NULL,
            company      VARCHAR(120) NOT NULL DEFAULT '',
            phone        VARCHAR(30)  NOT NULL DEFAULT '',
            subject      VARCHAR(20)  NOT NULL DEFAULT '',
            message      TEXT NOT NULL,
            status       VARCHAR(10)  NOT NULL DEFAULT 'new',
            notes        TEXT NULL,
            utm_source   VARCHAR(300) NOT NULL DEFAULT '',
            utm_medium   VARCHAR(300) NOT NULL DEFAULT '',
            utm_campaign VARCHAR(300) NOT NULL DEFAULT '',
            utm_term     VARCHAR(300) NOT NULL DEFAULT '',
            utm_content  VARCHAR(300) NOT NULL DEFAULT '',
            landing_page VARCHAR(300) NOT NULL DEFAULT '',
            referrer     VARCHAR(300) NOT NULL DEFAULT '',
            emailed      TINYINT(1)   NOT NULL DEFAULT 0,
            KEY idx_created (created_at),
            KEY idx_status (status)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

        // SEO overrides per page. NULL = use the default written in the page file.
        $pdo->exec("CREATE TABLE IF NOT EXISTS ma_page_meta (
            path        VARCHAR(100) NOT NULL PRIMARY KEY,
            title       VARCHAR(200) NULL,
            description VARCHAR(400) NULL,
            og_image    VARCHAR(300) NULL,
            schema_json MEDIUMTEXT NULL,
            noindex     TINYINT(1) NULL,
            updated_at  DATETIME NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    }

    $stmt = $pdo->prepare("REPLACE INTO ma_settings (name, value) VALUES ('schema_version', ?)");
    $stmt->execute([(string) DB_SCHEMA_VERSION]);
}
