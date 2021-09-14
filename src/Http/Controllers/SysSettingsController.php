<?php

namespace Shuixiang\AdminSiteSettings\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Tab;
use Illuminate\Routing\Controller;
use Shuixiang\AdminSiteSettings\AdminSiteSettingsServiceProvider as Provider;
use Shuixiang\AdminSiteSettings\Forms\SysSettingsForm;

class SysSettingsController extends Controller
{
    public function index(Content $content): Content
    {

        return $content
            ->title(Provider::trans('admin_site_settings.title'))
            ->description(Provider::trans('admin_site_settings.description'))
            ->breadcrumb([
                'text' => Provider::trans('admin_site_settings.title')
            ])
            ->body(function (Row $row) {
                $tab = new Tab();
                $tab->addLink(Provider::trans('admin_site_settings.site_info'), admin_route('site-info-settings'));
                $tab->addLink(Provider::trans('admin_site_settings.ui_theme'), admin_route('ui-theme-settings'));
                $tab->addLink(Provider::trans('admin_site_settings.upload_setting'), admin_route('upload-settings'));
                $tab->add(Provider::trans('admin_site_settings.sys_setting'), new SysSettingsForm(), true);

                $row->column(12, $tab->withCard());
            });
    }

}
