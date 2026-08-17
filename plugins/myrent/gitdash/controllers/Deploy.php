<?php namespace myrent\GitDash\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use myrent\GitDash\Classes\GitLab;
use Flash;

class Deploy extends Controller
{
    public $implement = [];
    public $requiredPermissions = ['myrent.deployhub.access'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MyRent.DeployHub', 'changes', 'deploy');
    }

    public function index() {}

    public function onTrigger()
    {
        $msg = trim(post('commit_message')) ?: 'Push from server';

        $project = env('GITLAB_PROJECT_PATH', 'myrent.webs/myrent.hr');
        $token   = env('GITLAB_TRIGGER_TOKEN');      // trigger token
        $ref     = env('GITLAB_DEPLOY_REF', 'main');

        if (!$token) { Flash::error('Missing GITLAB_TRIGGER_TOKEN in .env'); return; }

        $ok = GitLab::triggerPipeline($project, $token, $ref, [
            'RUN_DEPLOY' => '1',
            'M'          => $msg,
            // pass-thru if you want to override
            // 'DIR'     => '/home/myrent/htdocs/myrent.hr',
            // 'SERVER'  => '185.166.39.216',
        ]);

        if ($ok['ok']) {
            $link = $ok['url'] ?? null;
            Flash::success('Pipeline triggered.'.($link ? ' <a href="'.$link.'" target="_blank">View</a>' : ''));
        } else {
            Flash::error('Trigger failed: '.e($ok['error'] ?? 'unknown'));
        }
    }
}
