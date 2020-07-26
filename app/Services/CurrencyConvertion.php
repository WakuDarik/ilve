<?php

namespace App\Services;

use App\Currency;

class CurrencyConvertion
{
    public static function convert($sum, $originCurrencyCode = 'EUR', $targetCurrenceCode = null)
    {
        $originCurrency = Currency::ByCode($originCurrencyCode)->first();
        if (is_null($targetCurrenceCode)) {
            $targetCurrenceCode = session('currency', 'EUR');
        }
        $targetCurrence = Currency::byCode($targetCurrenceCode)->first();

        return $sum / 0.75 * $targetCurrence->rate;
    }
}
