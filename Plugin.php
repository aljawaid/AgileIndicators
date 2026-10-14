<?php

namespace Kanboard\Plugin\AgileIndicators;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

/**
 * Register AgileIndicators hooks, assets and isolated translations.
 * Translation loading is covered by tests/TranslationIsolationTest.php.
 * Sidebar hook placement is covered by tests/SidebarMarkupTest.php.
 */
class Plugin extends Base
{
    public function initialize()
    {
        // Layout - Template Hook - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:dashboard:sidebar', 'agileIndicators:dashboard/sidebar');
        $this->template->hook->attach('template:task:sidebar:information', 'agileIndicators:task/sidebar');

        // CSS - Asset Hook - keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/AgileIndicators/Assets/css/agile-indicators.css'));
    }

    public function onStartup()
    {
        // Namespaced English strings provide a safe fallback without overriding Kanboard translations.
        Translator::load('en_US', __DIR__ . '/Locale');

        $language = $this->languageModel->getCurrentLanguage();

        if ($language !== 'en_US') {
            Translator::load($language, __DIR__ . '/Locale');
        }
    }

    public function getPluginName()
    {
        return 'AgileIndicators';
    }

    public function getPluginDescription()
    {
        return t('agile_indicators.description');
    }

    public function getPluginAuthor()
    {
        return 'aljawaid';
    }

    public function getPluginVersion()
    {
        return '1.4.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/aljawaid/AgileIndicators';
    }
}
