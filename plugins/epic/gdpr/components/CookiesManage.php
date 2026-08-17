<?php

namespace Epic\GDPR\Components;

use Cms\Classes\ComponentBase;
use Epic\GDPR\Models\CookiesSettings;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Redirect;
use Input;
use Session;
use Flash;
use Form;
use Log;
use App;

class CookiesManage extends ComponentBase
{

    public function componentDetails() {

        return [
            'name'        => 'epic.gdpr::lang.components.cookies_manage.name',
            'description' => 'epic.gdpr::lang.components.cookies_manage.description'
        ];
    }

    public function defineProperties(){

        return [
        ];
    }

    public function onRun() {

        $this->page['epicCookies'] = CookiesSettings::getEpicCookies();
    }

}
