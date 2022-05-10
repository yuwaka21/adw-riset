<?php

namespace Adw\Formatter;

use Adw\Formatter\Config;

class Currency
{
    protected $value;
    
    public function __construct(float $value){
        $this->value = $value;
    }

    public function __toString(){
        return (float) $this->value;
    }

    /**
     * mengkonversi nominal int ke format currency.
     *
     * @param int $data
     * @return string
     */
    public function format($commaSeparator = null, $thousandSeparator = null, $decimalSeparator = null, $prefixCur = null){
        if(!$commaSeparator){
            $commaSeparator = Config::getConfig('commaSeparator');
        }
        if(!$thousandSeparator){
            $thousandSeparator = Config::getConfig('thousandSeparator');
        }
        if(!$decimalSeparator){
            $decimalSeparator = Config::getConfig('decimalSeparator');
        }  

        if(!$prefixCur){
            $prefixCur = Config::getConfig('prefixCur');
        }  

        return $prefixCur.number_format($this->value,$commaSeparator,$decimalSeparator,$thousandSeparator);
    }
    
    // public static function terbilang($nilai) {
	// 	if($nilai < 0) {
	// 		$hasil = "minus ". trim(penyebut($nilai));
	// 	} else {
	// 		$hasil = trim(penyebut($nilai));
	// 	}     		
	// 	return $hasil;
	// }

    // public static function penyebut($nilai) {
	// 	$nilai = abs($nilai);
	// 	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	// 	$temp = "";
	// 	if ($nilai < 12) {
	// 		$temp = " ". $huruf[$nilai];
	// 	} else if ($nilai <20) {
	// 		$temp = penyebut($nilai - 10). " belas";
	// 	} else if ($nilai < 100) {
	// 		$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
	// 	} else if ($nilai < 200) {
	// 		$temp = " seratus" . penyebut($nilai - 100);
	// 	} else if ($nilai < 1000) {
	// 		$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	// 	} else if ($nilai < 2000) {
	// 		$temp = " seribu" . penyebut($nilai - 1000);
	// 	} else if ($nilai < 1000000) {
	// 		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	// 	} else if ($nilai < 1000000000) {
	// 		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	// 	} else if ($nilai < 1000000000000) {
	// 		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	// 	} else if ($nilai < 1000000000000000) {
	// 		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	// 	}     
	// 	return $temp;
	// }	

    // public static function terbilang($number){
    //     $_this = new self;
    //     $number = abs($number);
    //     $angka = array("", "Satu", "Dua", "Tiga", "Empat", "Lima",
    //     "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    //     $temp = "";
    //     if ($number <12) {
    //         $temp = " ". $angka[$number];
    //     } else if ($number <20) {
    //         $temp = $_this->terbilang($number - 10). " Belas";
    //     } else if ($number <100) {
    //         $temp = $_this->terbilang($number/10)." Puluh". $_this->terbilang($number % 10);
    //     } else if ($number <200) {
    //         $temp = " Seratus" . $_this->terbilang($number - 100);
    //     } else if ($number <1000) {
    //         $temp = $_this->terbilang($number/100) . " Ratus" . $_this->terbilang($number % 100);
    //     } else if ($number <2000) {
    //         $temp = " Seribu" . $_this->terbilang($number - 1000);
    //     } else if ($number <1000000) {
    //         $temp = $_this->terbilang($number/1000) . " Ribu" . $_this->terbilang($number % 1000);
    //     } else if ($number <1000000000) {
    //         $temp = $_this->terbilang($number/1000000) . " Juta" . $_this->terbilang($number % 1000000);
    //     } else if ($number <1000000000000) {
    //         $temp = $_this->terbilang($number/1000000000) . " Miliar" . $_this->terbilang(fmod($number,1000000000));
    //     } else if ($number <1000000000000000) {
    //         $temp = $_this->terbilang($number/1000000000000) . " Triliun" . $_this->terbilang(fmod($number,1000000000000));
    //     }
    //     return $temp;
    // }
}
