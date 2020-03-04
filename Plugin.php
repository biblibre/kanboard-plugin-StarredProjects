<?php

namespace Kanboard\Plugin\StarredProjects;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:user:integrations', 'StarredProjects:user/integrations');
        $this->template->setTemplateOverride('dashboard/overview', 'StarredProjects:dashboard/overview');
        $this->template->setTemplateOverride('header/board_selector', 'StarredProjects:header/board_selector');
        $this->hook->on('template:layout:js', array('template' => 'plugins/StarredProjects/assets/js/starred-projects.js'));
        $this->hook->on('template:layout:css', array('template' => 'plugins/StarredProjects/assets/css/starred-projects.css'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getClasses()
    {
        return [
            'Plugin\StarredProjects\Model' => [
                'StarredProjectsModel',
            ],
        ];
    }

    public function getPluginName()
    {
        return 'StarredProjects';
    }

    public function getPluginDescription()
    {
        return t('Starred Projects');
    }

    public function getPluginAuthor()
    {
        return 'BibLibre';
    }

    public function getPluginVersion()
    {
        return '0.2.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/biblibre/kanboard-plugin-StarredProjects';
    }
}
