<?php

require_once 'Header.php';

$requirements = [
    'PHP 7.2.0' => version_compare(PHP_VERSION, '7.2.0', '>='),
    'PHP extension XML' => extension_loaded('xml'),
    'PHP extension xmlwriter' => extension_loaded('xmlwriter'),
    'PHP extension mbstring' => extension_loaded('mbstring'),
    'PHP extension ZipArchive' => extension_loaded('zip'),
    'PHP extension GD (optional)' => extension_loaded('gd'),
    'PHP extension dom (optional)' => extension_loaded('dom'),
];

if (!$helper->isCli()) {
    ?>
    <?php
    echo '<h3>Requirement check</h3>';
    echo '<ul>';
    foreach ($requirements as $label => $result) {
        $status = $result ? 'passed' : 'failed';
        echo "<li>{$label} ... <span class='{$status}'>{$status}</span></li>";
    }
    echo '</ul>';
} else {
    echo 'Requirement check:' . PHP_EOL;
    foreach ($requirements as $label => $result) {
        $status = $result ? '32m passed' : '31m failed';
        echo "{$label} ... \033[{$status}\033[0m" . PHP_EOL;
    }
}
