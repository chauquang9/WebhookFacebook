<?php

namespace App\Http\Facebook\Support;

use App\Http\Facebook\Constant;
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
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v8.0',
        ]);

        return $fb;
    }
}
