<?php

namespace Shuixiang\AdminSiteSettings;

use Illuminate\Support\Facades\Storage;

class SiteSetting
{
    public static function init()
    {
        $config = [];

        // site name
        $siteName = admin_setting('site_name', null);
        if (!is_null($siteName)) {
            $config['admin.name'] = $siteName;
        }

        // site title
        $siteTitle = admin_setting('site_title', null);
        if (!is_null($siteTitle)) {
            $config['admin.title'] = $siteTitle;
        }

        // logo
        $logoType = admin_setting('logo_type', null);
        $logoUrl = admin_setting('logo', null);
        $logoText = admin_setting('logo_text', null);
        if (!is_null($logoType)) {
            switch ($logoType) {
                case 'text':
                    if (!is_null($logoText)) {
                        $config['admin.logo'] = $logoText;
                    }
                    break;
                case 'img':
                    if (!empty($logoUrl)) {
                        $logoUrl = Storage::url($logoUrl);
                        $config['admin.logo'] = "<img src='{$logoUrl}' width='35' />";
                    } else {
                        $config['admin.logo'] = '';
                    }
                    break;
                case 'img_text':
                    if (!empty($logoUrl)) {
                        $logoUrl = Storage::url($logoUrl);
                        $config['admin.logo'] = "<img src='{$logoUrl}' width='35' /> ";
                    } else {
                        $config['admin.logo'] = '';
                    }
                    if (!is_null($logoText)) {
                        $config['admin.logo'] .= admin_setting('logo_text');
                    }
                    break;
            }
        }

        // logo-mini
        $logoMini = admin_setting('logo_mini', null);
        if (!empty($logoMini)) {
            $logoMini = Storage::url($logoMini);
            $config['admin.logo-mini'] = "<img src='{$logoMini}' />";
        } else {
            $config['admin.logo-mini'] = '';
        }

        // default avatar
        $defaultAvatar = admin_setting('default_avatar', null);
        if (!is_null($defaultAvatar)) {
            $defaultAvatar = Storage::url($defaultAvatar);
            $config['admin.default_avatar'] = $defaultAvatar;
        }

        // default icon
        $defaultIcon = admin_setting('default_icon', null);
        if (!empty($defaultIcon)) {
            $config['admin.menu.default_icon'] = "{$defaultIcon}";
        }

        // timezone
        $timezone = admin_setting('timezone', null);
        if (!is_null($timezone)) {
            $config['app.timezone'] = $timezone;
        }

        // locale
        $locale = admin_setting('locale', null);
        if (!is_null($locale)) {
            $config['app.locale'] = $locale;
        }

        // upload settings
        $imageDirectory = admin_setting('upload_image_directory', null);
        if (!is_null($imageDirectory)) {
            $config['admin.upload.directory.image'] = $imageDirectory;
        }

        $fileDirectory = admin_setting('upload_file_directory', null);
        if (!is_null($fileDirectory)) {
            $config['admin.upload.directory.file'] = $fileDirectory;
        }

        // UI and theme
        $layoutColor = admin_setting('site_layout_color', null);
        if (!is_null($layoutColor)) {
            $config['admin.layout.color'] = $layoutColor;
        }

        $layoutSidebarStyle = admin_setting('site_layout_sidebar_style', null);
        if (!is_null($layoutSidebarStyle)) {
            $config['admin.layout.sidebar_style'] = $layoutSidebarStyle;
        }

        $layoutNavbarColor = admin_setting('site_layout_navbar_color', null);
        if (!is_null($layoutNavbarColor)) {
            $config['admin.layout.navbar_color'] = $layoutNavbarColor;
        }

        $layoutHMenu = admin_setting('site_layout_horizontal_menu', null);
        if (!is_null($layoutHMenu)) {
            $config['admin.layout.horizontal_menu'] = (bool)$layoutHMenu;
        }

        $layoutCollapsed = admin_setting('site_layout_sidebar_collapsed', null);
        if (!is_null($layoutCollapsed)) {
            $config['admin.layout.sidebar_collapsed'] = (bool)$layoutCollapsed;
        }

        $layoutModeSwitch = admin_setting('site_layout_dark_mode_switch', null);
        if (!is_null($layoutModeSwitch)) {
            $config['admin.layout.dark_mode_switch'] = (bool)$layoutModeSwitch;
        }

        // whether cache menu
        $cacheMenu = admin_setting('site_cache_menu', null);
        if (!is_null($cacheMenu)) {
            $config['admin.menu.cache.enable'] = (bool)$cacheMenu;
        }

        // helpers tool
        $helpers = admin_setting('site_helpers', null);
        if (!is_null($helpers)) {
            $config['admin.helpers.enable'] = (bool)$helpers;
        }

        config($config);
    }
}
