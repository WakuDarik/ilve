<?php

namespace App\Services;

use App\Currency;
use Illuminate\Support\Facades\Http;

class CurrencyConvertion
{
    protected static $webCurrency;

    public static function loadCurrency()
    {
        if (is_null(self::$webCurrency)) {
            self::$webCurrency = self::getEurRate();
        }
        return self::$webCurrency;
    }
    protected static function getEurRate()
    {
        $response = Http::get('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
        return  json_decode($response, true)[1]['sale'];
    }

    public static function convert($sum, $originCurrencyCode = 'EUR', $targetCurrenceCode = null)
    {
        $originCurrency = Currency::ByCode($originCurrencyCode)->first();
        self::loadCurrency();
        if (!is_null(self::$webCurrency)) {
            $rate = self::$webCurrency;
        } elseif (is_null($targetCurrenceCode)) {
            $targetCurrenceCode = session('currency', 'EUR');
            $targetCurrence = Currency::byCode($targetCurrenceCode)->first();
            $rate =  $targetCurrence->rate;
        }

        return $sum / 0.75 * $rate;
    }
}
