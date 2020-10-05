<?php

namespace App\Http\Facebook;

use Illuminate\Support\Facades\Facade;

/**
 * @method static FaceBookOperator token()
 * @method static FaceBookOperator page()
 * @method static FaceBookOperator messenger()
 * @method static FaceBookOperator comment()
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
