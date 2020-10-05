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
            return 'EAAEmBQCEPTcBADMTVNW5iiveXqDuSDj6ycfMQjf3vHBScLRwiJH1hO7OBadmXayaKjkZCkhopmIuXMgaqo8XA4IWOzTQuS2ru7hDZCcxdnN3SJywwgOuAnI6tRT6oNYrK5Dpd4iyKc3acgZAtnJz4FDOitkOgikCMkJJdPYnZBeuEwI4vZApwKNU6elOePccZD';
        }

        return Constant::FACEBOOK_APP_ID.'|'.Constant::FACEBOOK_APP_SECRET;
    }
}
