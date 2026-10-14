<?php

/**
 * Verify sidebar hook placement, markup ownership and colour contrast.
 *
 * Related files: Plugin.php, both Template sidebar files and Assets/css/agile-indicators.css.
 */

// phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols -- Standalone contract test executes immediately and defines local helpers.

function relativeLuminance($hexColor)
{
    $channels = array(
        hexdec(substr($hexColor, 1, 2)) / 255,
        hexdec(substr($hexColor, 3, 2)) / 255,
        hexdec(substr($hexColor, 5, 2)) / 255,
    );

    foreach ($channels as &$channel) {
        $channel = $channel <= 0.04045
            ? $channel / 12.92
            : (($channel + 0.055) / 1.055) ** 2.4;
    }

    return (0.2126 * $channels[0]) + (0.7152 * $channels[1]) + (0.0722 * $channels[2]);
}

function contrastRatio($foreground, $background)
{
    $foregroundLuminance = relativeLuminance($foreground);
    $backgroundLuminance = relativeLuminance($background);
    $lighter = max($foregroundLuminance, $backgroundLuminance);
    $darker = min($foregroundLuminance, $backgroundLuminance);

    return ($lighter + 0.05) / ($darker + 0.05);
}

$pluginRoot = dirname(__DIR__);
$errors = array();
$templateFiles = array(
    $pluginRoot . DIRECTORY_SEPARATOR . 'Template' . DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'sidebar.php',
    $pluginRoot . DIRECTORY_SEPARATOR . 'Template' . DIRECTORY_SEPARATOR . 'task' . DIRECTORY_SEPARATOR . 'sidebar.php',
);

foreach ($templateFiles as $templateFile) {
    $template = file_get_contents($templateFile);
    $templateName = basename(dirname($templateFile)) . '/sidebar.php';

    if (strpos($template, 'CLOSING TAG FROM CORE TEMPLATE') !== false) {
        $errors[] = $templateName . ' closes Kanboard-owned markup';
    }

    if (substr_count($template, '<li class="agile-indicators-sidebar">') !== 1) {
        $errors[] = $templateName . ' must have one scoped list-item wrapper';
    }

    preg_match_all('/<li(?:\s|>)/i', $template, $openingListItems);
    preg_match_all('/<\/li>/i', $template, $closingListItems);

    if (count($openingListItems[0]) !== count($closingListItems[0])) {
        $errors[] = $templateName . ' has unbalanced list-item markup';
    }

    if (!preg_match('/<\/li>\s*$/', $template)) {
        $errors[] = $templateName . ' must close its own list-item wrapper';
    }
}

$pluginSource = file_get_contents($pluginRoot . DIRECTORY_SEPARATOR . 'Plugin.php');

if (strpos($pluginSource, "hook->attach('template:task:sidebar:information', 'agileIndicators:task/sidebar')") === false) {
    $errors[] = 'Task indicators must use the information hook';
}

if (strpos($pluginSource, "hook->attach('template:task:sidebar:actions', 'agileIndicators:task/sidebar')") !== false) {
    $errors[] = 'Task indicators must not depend on task editing access';
}

$stylesheet = file_get_contents($pluginRoot . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'agile-indicators.css');

foreach (array(':root', '.display-none', '.d-none', '--pp-') as $unscopedToken) {
    if (strpos($stylesheet, $unscopedToken) !== false) {
        $errors[] = 'Stylesheet contains an unscoped token: ' . $unscopedToken;
    }
}

preg_match_all('/--([a-z0-9-]+)\s*:/i', $stylesheet, $customProperties);

foreach ($customProperties[1] as $customProperty) {
    if (strpos($customProperty, 'agile-indicators-') !== 0) {
        $errors[] = 'Stylesheet contains an unscoped custom property: --' . $customProperty;
    }
}

$colourNames = array(
    'text',
    'priority-high',
    'priority-medium',
    'priority-low',
    'complexity-low',
    'complexity-medium',
    'complexity-high',
);
$colours = array();

foreach ($colourNames as $colourName) {
    if (preg_match('/--agile-indicators-' . preg_quote($colourName, '/') . ':\s*(#[0-9A-F]{6})/i', $stylesheet, $match)) {
        $colours[$colourName] = strtoupper($match[1]);
    } else {
        $errors[] = 'Stylesheet is missing colour variable: ' . $colourName;
    }
}

if (isset($colours['text'])) {
    foreach ($colours as $colourName => $colour) {
        if ($colourName !== 'text' && contrastRatio($colours['text'], $colour) < 4.5) {
            $errors[] = 'Text contrast is below 4.5:1 for ' . $colourName;
        }
    }
}

if (!empty($errors)) {
    fwrite(STDERR, implode(PHP_EOL, $errors) . PHP_EOL);
    exit(1);
}

echo 'Sidebar markup, hook placement and colour contrast checks passed.' . PHP_EOL;
