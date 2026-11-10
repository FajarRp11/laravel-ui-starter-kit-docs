<?php

$kitPath = base_path('../blade-ui-kit');
$commitHash = '3a21e40';

if (is_dir($kitPath)) {
    $output = @shell_exec('git -C '.escapeshellarg($kitPath).' rev-parse --short HEAD 2>nul');
    if ($output && preg_match('/^[0-9a-f]{7,40}$/i', trim($output))) {
        $commitHash = trim($output);
    }
}

return [
    'kit_path' => $kitPath,
    'kit_hash' => env('DOCS_KIT_HASH', $commitHash),
    'github_repo' => env('DOCS_GITHUB_REPO', 'https://github.com/'),
];
