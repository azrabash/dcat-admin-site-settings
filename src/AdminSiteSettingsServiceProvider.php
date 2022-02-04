<?php

namespace Shuixiang\AdminSiteSettings;

use Dcat\Admin\Extend\ServiceProvider;

class AdminSiteSettingsServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	protected $menu = [
	    [
	        'title' => 'Admin Settings',
            'uri' => 'admin-settings',
            'icon' => 'fa fa-gears',
        ]
    ];

    public function register()
	{
		//
	}

	public function init()
	{

		parent::init();

		//

	}

	//public function settingForm()
	//{
	//	return new Setting($this);
	//}
}
