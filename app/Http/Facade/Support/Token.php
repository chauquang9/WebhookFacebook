<?php

namespace App\Http\Facade\Support;

use App\Http\Facade\Constant;
use Illuminate\Support\Facades\App;

class Token implements TokenInterface
{
    /**
     * @return string
     */
    public function getAccessToken() {
        if(App::environment('local')) {
            // https://developers.facebook.com/tools/explorer/
            return 'EAAEmBQCEPTcBAC4HAxdw9rJrZBizanWW6sAfBOKtrJygwSj3KbHCU3ZAlB4opvcXSgO1gwcCZAyjMY3F2NwqBm6tP09FZBtEZAPmiUawG9fZCnQXRyXjQuJwWYi1KaJSwl4RDZANh4M3tm5vOK7BsrsjmhA7yd2jnp51o2las4VZBnS7ZBZCZBZBxL6FMcMj7cmqEB6QrxI6ksM9CKVtiUIa0DTD';
        }

        return Constant::FACEBOOK_APP_ID.'|'.Constant::FACEBOOK_APP_SECRET;
    }
}
