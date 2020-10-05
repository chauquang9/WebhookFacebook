<?php

namespace App\Http\Facebook\Support;

use App\Http\Facebook\Constant;
use Illuminate\Support\Facades\App;

/**
 * Class Token
 * @package App\Http\Facade\Support
 */
class Token
{
    /**
     * @return string
     */
    public function getAccessToken() {
        if(App::environment('local')) {
            // https://developers.facebook.com/tools/explorer/
            return env('FACEBOOK_LONG_LIVE_TOKEN');
        }

        return env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET');
    }
}
