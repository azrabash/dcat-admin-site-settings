<?php

namespace Shuixiang\AdminSiteSettings\Forms;

use Dcat\Admin\Widgets\Form;
use Shuixiang\AdminSiteSettings\AdminSiteSettingsServiceProvider as Provider;

class UploadSettingsForm extends Form
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
        $this->text('upload_image_directory', Provider::trans('admin_site_settings.fields.upload_image_directory'))
            ->help(Provider::trans('admin_site_settings.helps.upload_image_directory'))
            ->default(admin_setting('upload_image_directory'));

        $this->text('upload_file_directory', Provider::trans('admin_site_settings.fields.upload_file_directory'))
            ->help(Provider::trans('admin_site_settings.helps.upload_file_directory'))
            ->default(admin_setting('upload_file_directory'));
    }

}
