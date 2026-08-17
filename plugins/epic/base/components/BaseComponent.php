<?php

namespace Epic\Base\Components;

use Illuminate\Support\Facades\Mail;
use Input;
use Event;
use App;
use Carbon\Carbon;
use Session;
use Flash;
use Validator;
use ValidationException;
use Auth;
use Redirect;
use BackendAuth;
use Http;
use Cache;

use Tailor\Models\EntryRecord as EntryRecord;
use Tailor\Models\GlobalRecord as GlobalRecord;

class BaseComponent extends \Cms\Classes\ComponentBase
{

    public $currentPage;


    public function componentDetails()
    {
        return [
          'name' => 'Base Component',
          'description' => 'Base Component'
        ];
    }

    public function init()
    {


    }

    public function onRun()
    {
        $this->page['_token'] = Session::get('_token');
        $this->page['GTAG'] = getenv('GTAG');
        $this->currentPage = $this->page['currentPage'] = Input::get('page') ?? 1;
    }



}
