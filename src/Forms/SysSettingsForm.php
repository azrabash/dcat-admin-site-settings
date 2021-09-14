<?php

namespace Shuixiang\AdminSiteSettings\Forms;

use Dcat\Admin\Widgets\Form;
use Shuixiang\AdminSiteSettings\AdminSiteSettingsServiceProvider as Provider;

class SysSettingsForm extends Form
{

    public function handle(array $input)
    {
        admin_setting($input);

        return $this
            ->response()
            ->success(Provider::trans('success'))
            ->refresh();
    }

    public function form()
    {
        $this->switch('site_cache_menu', Provider::trans('admin_site_settings.fields.site_cache_menu'))
            ->help(Provider::trans('admin_site_settings.helps.site_cache_menu'))
            ->default(admin_setting('site_cache_menu')??false);

        $this->switch('site_helpers', Provider::trans('admin_site_settings.fields.site_helpers'))
            ->help(Provider::trans('admin_site_settings.helps.site_helpers'))
            ->default(admin_setting('site_helpers')??false);
    }

}
