<?php

namespace Yuwaka\Adw;
use Carbon\Carbon;

class Date
{
    /**
     * mengkonversi nominal int ke format currency.
     *
     * @param int $data
     * @return string
     */

    public static function index($number){
        $value = Carbon::parse($number);
        return $value->isoFormat('M-D-Y');
    }

    public static function human_date($number){
        Carbon::setLocale('id');
        $value = Carbon::parse($number);
        return $value->isoFormat('dddd, D MMMM Y');
    }
}
