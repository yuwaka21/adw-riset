<?php

namespace Adw\Formatter;
use Adw\Formatter\Config;
use Carbon\Carbon;

class Time
{
    protected $value;

    public function __construct($value){
        $this->value = $value;
    }

    public function __toString(){
        return (String) $this->value;
    }

    public static function default(){
        if(!$formatTime){
            $formatTime = Config::getConfig('formatTime');
        }  
        $date = Carbon::parse($this->value);
        return $date->isoFormat($formatTime);
    }

    public static function dateTime(){
        if(!$formatDateTime){
            $formatDateTime = Config::getConfig('formatDateTime');
        }  
        $date = Carbon::parse($this->value);
        return $date->isoFormat($formatDateTime);
    }

    public static function humanTime(){
        if(!$formatHumanDateTime){
            $formatHumanDateTime = Config::getConfig('formatHumanDateTime');
        }  
        if(!$language){
            $language = Config::getConfig('language');
        } 
        Carbon::setLocale($language);
        $date = Carbon::parse($this->value);
        return $date->isoFormat($formatHumanDateTime);
    }

    public static function timelapse(){
        if(!$language){
            $language = Config::getConfig('language');
        } 
        Carbon::setLocale($language);
        $value = Carbon::parse($this->value);
        return $value->diffForHumans();
    }
}
