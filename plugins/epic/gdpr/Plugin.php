<?php

namespace Epic\GDPR;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use Epic\GDPR\Models\CookiesSettings;
use Config;
use Backend;
use Validator;
use Log;
use Yaml;
use File;
use Storage;


class Plugin extends PluginBase {

    public function boot() {
    }

    public function registerSettings() {

        return [
            'cookies' => [
                'label' => 'epic.gdpr::lang.settings.cookies.name',
                'description' => 'epic.gdpr::lang.settings.cookies.description',
                'category'    => 'GDPR',
                'icon' => 'icon-desktop',
                'class' => 'Epic\GDPR\Models\CookiesSettings',
                'keywords' => 'gdpr cookies bar consent',
                'order' => 110,
                'permissions' => ['epic.gdpr.access_cookies_settings'],
            ],
        ];
    }

    public function registerComponents() {

        return [
            'Epic\GDPR\Components\CookiesBar' => 'cookiesBar',
            'Epic\GDPR\Components\CookiesManage' => 'cookiesManage',
        ];
    }

    public function registerMarkupTags() {

        $settings = CookiesSettings::instance();

        return [
            'functions' => [
                'cookiesSettingsGet' => function ($value, $default = NULL) use ($settings){
                    if(empty($settings->$value)) {
                        return $default;
                    } else {
                        return $settings->$value;
                    }
                }
            ]
        ];
    }


}
