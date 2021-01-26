<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;
use LogicException;

trait Translateble
{
    protected $defaultLocale = 'ua';

    public function __($fieldName)
    {
        $locale = App::getLocale() ?? $this->defaultLocale;
        if ($locale === 'ru') {
            $fieldName .= '_ru';
        }

        // if (!in_array($fieldName, $this->attributes)) {
        //     throw new \LogicException('no such attr for model ' . get_class($this));
        // }

        return $this->$fieldName;
    }
}
