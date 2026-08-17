<?php namespace myrent\GitDash\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Changes extends Controller
{
    public $implement = [];
    public $requiredPermissions = ['myrent.deployhub.access'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MyRent.DeployHub', 'changes', 'changes');
    }

    public function index()
    {
        // nothing special; view runs `git status` & `git diff --name-only`
    }

    public function onRefreshChanges()
    {
        return ['#changesList' => $this->makePartial('changes_list')];
    }
}
