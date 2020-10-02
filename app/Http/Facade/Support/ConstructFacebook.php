<?php

namespace App\Http\Facade\Support;

use App\Http\Facade\Constant;
use Facebook\Facebook;

/**
 * Class ConstructFacebook
 * @package App\Http\Facade\Support
 */
class ConstructFacebook
{
    /**
     * @return Facebook
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public static function construct()
    {
        $fb = new Facebook([
            'app_id' => Constant::FACEBOOK_APP_ID,
            'app_secret' => Constant::FACEBOOK_APP_SECRET,
            'default_graph_version' => 'v8.0',
        ]);

        return $fb;
    }
}
