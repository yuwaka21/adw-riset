<?php

namespace Yuwaka\Adw;

class Currency
{
    /**
     * mengkonversi nominal int ke format currency.
     *
     * @param int $data
     * @return string
     */
    public static function index($number){
        if ( ! is_numeric($number)){
            return 'Please input number';
        }

        return "Rp. ".number_format($number,2,',','.');
    }

    public static function terbilang($number){
        if ( ! is_numeric($number)){
            return 'Please input number';
        }
        $_this = new self;
        $number = abs($number);
        $angka = array("", "Satu", "Dua", "Tiga", "Empat", "Lima",
        "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($number <12) {
            $temp = " ". $angka[$number];
        } else if ($number <20) {
            $temp = $_this->terbilang($number - 10). " Belas";
        } else if ($number <100) {
            $temp = $_this->terbilang($number/10)." Puluh". $_this->terbilang($number % 10);
        } else if ($number <200) {
            $temp = " Seratus" . $_this->terbilang($number - 100);
        } else if ($number <1000) {
            $temp = $_this->terbilang($number/100) . " Ratus" . $_this->terbilang($number % 100);
        } else if ($number <2000) {
            $temp = " Seribu" . $_this->terbilang($number - 1000);
        } else if ($number <1000000) {
            $temp = $_this->terbilang($number/1000) . " Ribu" . $_this->terbilang($number % 1000);
        } else if ($number <1000000000) {
            $temp = $_this->terbilang($number/1000000) . " Juta" . $_this->terbilang($number % 1000000);
        } else if ($number <1000000000000) {
            $temp = $_this->terbilang($number/1000000000) . " Miliar" . $_this->terbilang(fmod($number,1000000000));
        } else if ($number <1000000000000000) {
            $temp = $_this->terbilang($number/1000000000000) . " Triliun" . $_this->terbilang(fmod($number,1000000000000));
        }
        return $temp;
    }
}
