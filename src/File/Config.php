<?php
namespace Adw\File;

class Config
{

    protected static $config = [
        'path' => 'public/files',
        'extType'=>'doc,docx,pdf,jpeg,jpg,png,txt,csv',
        'maxSize'=>'2048'
    ];

    public static function setConfig($config){
        self::$config = $config;
    }

    public static function getConfig($name){
        return self::$config[$name];
    }
}
