<?php

namespace App\Http\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void token()
 * @method static void page()
 * @method static void messenger()
 *
 * Class FacadeFacebook
 * @package App\Http\Facade
 */
class FacadeFacebook extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'facadeFacebook';
    }
}
