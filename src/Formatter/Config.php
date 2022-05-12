<?php
namespace Adw\Formatter;

class Config
{

    protected static $config = [
        'thousandSeparator' => '.',
        'decimalSeparator'=>',',
        'commaSeparator'=> 2,
        'prefixCur'=>'Rp. ',
        'language'=>'id',
        'formatDate'=>'M-D-Y',
        'formatDateTime'=>'M-D-Y hh:mm',
        'formatTime'=>'hh:mm',
        'formatHumanDate'=>'dddd, D MMMM Y',
        'formatHumanDateTime'=>'dddd, D MMMM Y hh:mm',
        'satuanAngka'=> [
            '',
            'satu',
            'dua',
            'tiga',
            'empat',
            'lima',
            'enam',
            'tujuh',
            'delapan',
            'sembilan',
            'sepuluh',
            'sebelas'
        ],
        'satuanBilanganNol'=>'nol',
        'satuanBilanganKoma'=>'koma',
        'satuanBilanganBelasan'=> ' belas',
        'satuanBilanganPuluhan'=> ' puluh',
        'satuanBilanganRatus'=> 'seratus',
        'satuanBilanganRatusan'=> ' ratus',
        'satuanBilanganRibu'=> 'seribu',
        'satuanBilanganJutaan'=> ' juta',
        'satuanBilanganMilyar'=> ' milyar',
        'satuanBilanganTriliun'=> ' triliun',
        'satuanBilanganSeptiliun'=> ' septiliun',
    ];

    public static function setConfig($config){
        self::$config = $config;
    }

    public static function getConfig($name){
        return self::$config[$name];
    }
}