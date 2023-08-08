<?php

namespace Kanboard\Plugin\AgileIndicators;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        // Layout - Template Hook - Override name should start lowercase e.g. pluginNameExampleCamelCase
        $this->template->hook->attach('template:dashboard:sidebar', 'agileIndicators:dashboard/sidebar');
        $this->template->hook->attach('template:task:sidebar:actions', 'agileIndicators:task/sidebar');

        // CSS - Asset Hook - keep filename lowercase
        $this->hook->on('template:layout:css', array('template' => 'plugins/AgileIndicators/Assets/css/agile-indicators.css'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName()
    {
        return 'AgileIndicators';
    }

    public function getPluginDescription()
    {
        return t('AgileIndicators displays the measurements for Task Priorities and Task Complexities in an easy to use general scale. Task Priorities are scaled between P1 and P5 whilst Task Complexities are scored as 0-50.');
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
