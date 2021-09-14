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
	        'title' => 'Admin Site Settings',
            'uri' => 'admin-site-settings',
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
