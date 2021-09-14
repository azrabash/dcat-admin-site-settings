<?php

namespace Shuixiang\AdminSiteSettings\Forms;

use Dcat\Admin\Widgets\Form;
use Shuixiang\AdminSiteSettings\AdminSiteSettingsServiceProvider as Provider;

class SiteInfoForm extends Form
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
        $this->text('site_name', Provider::trans('admin_site_settings.fields.site_name'))
            ->help(Provider::trans('admin_site_settings.helps.site_name'))
            ->default(admin_setting('site_name'));

        $this->text('site_title', Provider::trans('admin_site_settings.fields.site_title'))
            ->help(Provider::trans('admin_site_settings.helps.site_title'))
            ->default(admin_setting('site_title'));

        $this->radio('logo_type', Provider::trans('admin_site_settings.fields.logo_type'))
            ->options([
                'img' => Provider::trans('admin_site_settings.fields.logo_type_img'),
                'text' => Provider::trans('admin_site_settings.fields.logo_type_text'),
                'img_text' => Provider::trans('admin_site_settings.fields.logo_type_img_text'),
            ])
            ->help(Provider::trans('admin_site_settings.helps.logo_type'))
            ->default(admin_setting('logo_type')??'img');

        $this->text('logo_text', Provider::trans('admin_site_settings.fields.logo_text'))
            ->help(Provider::trans('admin_site_settings.helps.logo_text'))
            ->default(admin_setting('logo_text'));

        $this->image('logo', Provider::trans('admin_site_settings.fields.logo'))
            ->retainable()->removable()->uniqueName()
            ->help(Provider::trans('admin_site_settings.helps.logo'))
            ->default(admin_setting('logo'));

        $this->image('logo_mini', Provider::trans('admin_site_settings.fields.logo_mini'))
            ->retainable()->removable()->uniqueName()
            ->help(Provider::trans('admin_site_settings.helps.logo_mini'))
            ->default(admin_setting('logo_mini'));

        $this->image('default_avatar', Provider::trans('admin_site_settings.fields.default_avatar'))
            ->retainable()->removable()->uniqueName()
            ->help(Provider::trans('admin_site_settings.helps.default_avatar'))
            ->default(admin_setting('default_avatar'));

        $this->icon('default_icon', Provider::trans('admin_site_settings.fields.default_icon'))
            ->help(Provider::trans('admin_site_settings.helps.default_icon'))
            ->default(admin_setting('default_icon'));

        $this->radio('timezone', Provider::trans('admin_site_settings.fields.timezone'))
            ->options([
                'Asia/Shanghai' => 'Asia/Shanghai',
                'UTC' => 'UTC',
            ])
            ->help(Provider::trans('admin_site_settings.helps.timezone'))
            ->default(admin_setting('timezone')??'Asia/Shanghai');

        $this->radio('locale', Provider::trans('admin_site_settings.fields.locale'))
            ->options([
                'zh_CN' => '中文（简体）',
                'en' => '英文',
            ])
            ->help(Provider::trans('admin_site_settings.helps.locale'))
            ->default(admin_setting('locale')??'zh_CN');
    }

}
