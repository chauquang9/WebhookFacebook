<?php

namespace App\Http\Facebook;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void token()
 * @method static void page()
 * @method static void messenger()
 * @method static void comment()
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
