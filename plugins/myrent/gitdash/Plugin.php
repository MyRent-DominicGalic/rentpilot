<?php namespace myrent\GitDash;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Deploy Hub',
            'description' => 'View local changes & deploy with a custom commit message.',
            'author'      => 'MyRent',
            'icon'        => 'icon-code-fork'
        ];
    }

    public function registerPermissions()
    {
        return [
            'myrent.deployhub.access' => [
                'tab' => 'Deploy',
                'label' => 'Access Deploy Hub'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'changes' => [
                'label'       => 'Changes',
                'url'         => Backend::url('myrent/gitdash/changes'),
                'icon'        => 'icon-exchange',
                'permissions' => ['myrent.gitdash.access'],
                'order'       => 500,
                'sideMenu'    => [
                    'changes' => [
                        'label'       => 'Changes',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('myrent/gitdash/changes'),
                        'permissions' => ['myrent.deployhub.access'],
                    ],
                    'deploy' => [
                        'label'       => 'Deploy',
                        'icon'        => 'icon-upload',
                        'url'         => Backend::url('myrent/gitdash/deploy'),
                        'permissions' => ['myrent.deployhub.access'],
                    ],
                ],
            ],
        ];
    }
}
