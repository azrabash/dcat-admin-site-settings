<?php

namespace Shuixiang\AdminSiteSettings\Forms;

use Dcat\Admin\Widgets\Form;
use Shuixiang\AdminSiteSettings\AdminSiteSettingsServiceProvider as Provider;

class UiThemeForm extends Form
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

        $this->radio('site_layout_color', Provider::trans('admin_site_settings.fields.site_layout_color'))
            ->options([
                'default' => 'Default',
                'blue' => 'Blue',
                'blue-light' => 'Light',
                'green' => 'Green',
            ])
            ->help(Provider::trans('admin_site_settings.helps.site_layout_color'))
            ->default(admin_setting('site_layout_color')??'default');

        $this->radio('site_layout_sidebar_style', Provider::trans('admin_site_settings.fields.site_layout_sidebar_style'))
            ->options([
                'light' => 'Light',
                'primary' => 'Primary',
                'dark' => 'Dark',
            ])
            ->help(Provider::trans('admin_site_settings.helps.site_layout_sidebar_style'))
            ->default(admin_setting('site_layout_sidebar_style')??'light');

        $this->radio('site_layout_navbar_color', Provider::trans('admin_site_settings.fields.site_layout_navbar_color'))
            ->options([
                '' => 'Not set',
                'bg-warning' => 'Orange',
                'bg-primary' => 'Blue',
                'bg-info' => 'Light Blue',
                'bg-success' => 'Green',
                'bg-danger' => 'Red',
                'bg-dark' => 'Black',
            ])
            ->help(Provider::trans('admin_site_settings.helps.site_layout_navbar_color'))
            ->default(admin_setting('site_layout_navbar_color')??'');

        $this->switch('site_layout_horizontal_menu', Provider::trans('admin_site_settings.fields.site_layout_horizontal_menu'))
            ->help(Provider::trans('admin_site_settings.helps.site_layout_horizontal_menu'))
            ->default(admin_setting('site_layout_horizontal_menu')??'');

        $this->switch('site_layout_sidebar_collapsed', Provider::trans('admin_site_settings.fields.site_layout_sidebar_collapsed'))
            ->help(Provider::trans('admin_site_settings.helps.site_layout_sidebar_collapsed'))
            ->default(admin_setting('site_layout_sidebar_collapsed')??'');

        $this->switch('site_layout_dark_mode_switch', Provider::trans('admin_site_settings.fields.site_layout_dark_mode_switch'))
            ->help(Provider::trans('admin_site_settings.helps.site_layout_dark_mode_switch'))
            ->default(admin_setting('site_layout_dark_mode_switch')??'');
    }

}
