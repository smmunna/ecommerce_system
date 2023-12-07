<?php

function loadEnv($filePath)
{
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {

        if (strpos($line, '#') === 0) {
            continue;
        }

        list($key, $value) = explode('=', $line, 2) + [null, null];
        if ($key !== null && $value !== null) {
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// Load .env file
loadEnv(__DIR__ . '/.env');
