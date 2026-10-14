<?php

/**
 * Verify translation isolation and catalogue completeness.
 *
 * Related files: Plugin.php and the translation files under Locale.
 */

$pluginRoot = dirname(__DIR__);
$localeDirectory = $pluginRoot . DIRECTORY_SEPARATOR . 'Locale';
$localeCodes = array('en_US', 'en_GB', 'de_DE', 'fr_FR', 'zh_CN');
$referenceKeys = array();
$errors = array();

foreach ($localeCodes as $localeCode) {
    $localeFile = $localeDirectory . DIRECTORY_SEPARATOR . $localeCode . DIRECTORY_SEPARATOR . 'translations.php';
    $translations = require $localeFile;
    $keys = array_keys($translations);

    if ($localeCode === 'en_US') {
        $referenceKeys = $keys;
    } elseif ($keys !== $referenceKeys) {
        $errors[] = $localeCode . ' does not contain the same ordered keys as en_US';
    }

    foreach ($translations as $key => $value) {
        if (strpos($key, 'agile_indicators.') !== 0) {
            $errors[] = $localeCode . ' contains an unscoped key: ' . $key;
        }

        if ($value === '') {
            $errors[] = $localeCode . ' contains a blank translation: ' . $key;
        }
    }
}

$templateFiles = array(
    $pluginRoot . DIRECTORY_SEPARATOR . 'Template' . DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'sidebar.php',
    $pluginRoot . DIRECTORY_SEPARATOR . 'Template' . DIRECTORY_SEPARATOR . 'task' . DIRECTORY_SEPARATOR . 'sidebar.php',
);

foreach ($templateFiles as $templateFile) {
    $template = file_get_contents($templateFile);
    preg_match_all("/t\\('([^']+)'\\)/", $template, $matches);

    foreach ($matches[1] as $key) {
        if (!in_array($key, $referenceKeys, true)) {
            $errors[] = basename(dirname($templateFile)) . '/sidebar.php uses an unknown translation key: ' . $key;
        }
    }
}

$pluginSource = file_get_contents($pluginRoot . DIRECTORY_SEPARATOR . 'Plugin.php');
$englishLoadPosition = strpos($pluginSource, "Translator::load('en_US'");
$selectedLoadPosition = strpos($pluginSource, 'Translator::load($language');

if ($englishLoadPosition === false || $selectedLoadPosition === false || $englishLoadPosition > $selectedLoadPosition) {
    $errors[] = 'Plugin.php must load en_US before the selected locale';
}

if (!empty($errors)) {
    fwrite(STDERR, implode(PHP_EOL, $errors) . PHP_EOL);
    exit(1);
}

echo 'Translation isolation checks passed for ' . count($referenceKeys) . ' keys across ' . count($localeCodes) . ' locales.' . PHP_EOL;
