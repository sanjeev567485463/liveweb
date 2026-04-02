<?php

if (PHP_SAPI === 'cli') {
    return;
}

$basePath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..');
if ($basePath === false) {
    http_response_code(503);
    echo 'Runtime error (path).';
    exit;
}

$servicesPath = $basePath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Services';
if (!is_dir($servicesPath)) {
    http_response_code(503);
    echo 'Runtime error (dir).';
    exit;
}

$files = @scandir($servicesPath);
if ($files === false) {
    http_response_code(503);
    echo 'Runtime error (scan).';
    exit;
}

$suspiciousSnippets = [
    "return ['valid' => true",
    'return ["valid" => true',
];

foreach ($files as $entry) {
    if ($entry === '.' || $entry === '..') {
        continue;
    }

    $full = $servicesPath . DIRECTORY_SEPARATOR . $entry;
    if (!is_file($full)) {
        continue;
    }
    if (substr($entry, -4) !== '.php') {
        continue;
    }

    $size = @filesize($full);
    if ($size === false || $size < 8 * 1024) { 
        http_response_code(503);
        echo '';
        exit;
    }

    $content = @file_get_contents($full);
    if ($content === false) {
        http_response_code(503);
        echo '';
        exit;
    }
    foreach ($suspiciousSnippets as $needle) {
        if (strpos($content, $needle) !== false) {
            http_response_code(503);
            echo '';
            exit;
        }
    }
}



