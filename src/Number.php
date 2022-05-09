<?php

namespace Yuwaka\Adw;

class Number
{
    /**
     * mengkonversi nominal int ke format number.
     *
     * @param int $data
     * @return string
     */
    public static function string($number){
        return number_format($number,2,',','.');
    }
    /**
     * mengkonversi nominal int ke format currency.
     *
     * @param string $data
     * @return number
     */
    public static function decimal($string){
        $replace = str_replace(',','.',str_replace('.','',$string));
        return $replace;
    }
}
