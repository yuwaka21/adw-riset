<?php

namespace Yuwaka\Adw;
use Carbon\Carbon;

class Time
{
    /**
     * mengkonversi nominal int ke format currency.
     *
     * @param int $data
     * @return string
     */
    public static function index($number){
        $value = Carbon::parse($number);
        return $value->isoFormat('hh:mm');
    }

    public static function date_time($number){
        $value = Carbon::parse($number);
        return $value->isoFormat('M-D-Y hh:mm');
    }

    public static function human_time($number){
        Carbon::setLocale('id');
        $value = Carbon::parse($number);
        return $value->isoFormat('dddd, D MMMM Y hh:mm');
    }

    public static function timelapse($number){
        Carbon::setLocale('id');
        $value = Carbon::parse($number);
        return $value->diffForHumans();
    }
}
