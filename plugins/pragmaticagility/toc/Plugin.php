<?php namespace PragmaticAgility\Toc;

use System\Classes\PluginBase;

/**
 * TOC Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Toc',
            'description' => 'Toc Component',
            'author'      => 'Kitt Parker',
            'icon'        => 'icon-map-pin'
        ];
    }

    //Register component
    public function registerComponents()
    {
        return [
            'pragmaticagility\toc\Components\Toc' => 'toc',
        ];
    }
}
