# Dcat Admin Extension

## 扩展名称：dcat-admin-site-settings

这是一个Dcat Admin站点管理的小工具，可以管理站点名称，logo，主题等信息

## 安装

1、安装包
```shell
composer require shuixiang/dcat-admin-site-settings
```

2、在admin/bootstrap.php中添加一下代码
````php
\Shuixiang\AdminSiteSettings\SiteSetting::init();
````

3、在resource/lang/zh_CN/menu.php的语言包中添加自定义的翻译
```php
'titles' => [
    // ...
    'admin_site_settings' => '站点设置管理',
    // ...
]
```
