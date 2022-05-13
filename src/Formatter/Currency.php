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
    public function format($decimalPrecision = null, $thousandSeparator = null, $decimalSeparator = null, $prefixCur = null){
        if(!$decimalPrecision){
            $decimalPrecision = Config::getConfig('decimalPrecision');
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

        return $prefixCur.number_format($this->value,$decimalPrecision,$decimalSeparator,$thousandSeparator);
    }
    
}
