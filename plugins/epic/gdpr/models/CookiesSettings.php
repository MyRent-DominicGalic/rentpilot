<?php

namespace Epic\GDPR\Models;

use Model;
use App;
use Log;
use Flash;
use System\Classes\PluginManager;

class CookiesSettings extends Model {

    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'cookies',
        'cookies_bar_title',
        'cookies_bar_content',
        'cookies_manage_title',
        'cookies_manage_content'
    ];

    protected $jsonable = [
        'cookies'
    ];

    public $requiredPermissions = ['epic.gdpr.access_cookies_settings'];

    public $settingsCode = 'epic_gdpr_cookies_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'set_cookies_lifetime_days' => 'numeric',
    ];

    static function getEpicCookies($epicCookiesPrefix = 'epic-cookies') {

        $epicCookies = [];

        $epicCookies['consent'] = !empty($_COOKIE[($epicCookiesPrefix . '-consent')]);

        foreach (CookiesSettings::get('cookies', []) as $cookie) {

            // REQUIRED are always ON
            if (!empty($cookie['required'])) {
                $epicCookies[$cookie['slug']] = 1;
                continue;
            }

            // DEFAULT ENABLED cookies are ON only when no general consent or when explicitly allowed
            if (!empty($cookie['default_enabled']) and empty($_COOKIE[($epicCookiesPrefix . '-consent')])) {
                $epicCookies[$cookie['slug']] = 1;
                continue;
            }

            // ALL OTHER by its consent state
            if (!empty($_COOKIE[($epicCookiesPrefix . '-' . $cookie['slug'])])) {
                $epicCookies[$cookie['slug']] = 1;
            }
        }

        return $epicCookies;

    }
}
