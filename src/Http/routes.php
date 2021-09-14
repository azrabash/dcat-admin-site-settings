<?php

use Shuixiang\AdminSiteSettings\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('admin-site-settings', Controllers\AdminSiteSettingsController::class.'@index')->name('site-info-settings');
Route::get('admin-site-settings/ui-theme', Controllers\UiThemeSettingsController::class.'@index')->name('ui-theme-settings');
Route::get('admin-site-settings/upload', Controllers\UploadSettingsController::class.'@index')->name('upload-settings');
Route::get('admin-site-settings/sys', Controllers\SysSettingsController::class.'@index')->name('sys-settings');
