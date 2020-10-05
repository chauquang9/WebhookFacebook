<?php

namespace App\Http\Facebook;

/**
 * Class Constant
 * @package App\Http\Facade
 */
class Constant
{
    const DIRECTORY_FACADE_PAGE = [
        'directory' => 'Http/Facebook/WebHookPage',
        'namespace' => 'App\Http\Facebook\WebHookPage'
    ];

    const DIRECTORY_FACADE_USER = [
        'directory' => 'Http/Facebook/WebHookUser',
        'namespace' => 'App\Http\Facebook\WebHookUser'
    ];

    const DIRECTORY_FACADE_PERMISSION = [
        'directory' => 'Http/Facebook/WebHookPermission',
        'namespace' => 'App\Http\Facebook\WebHookPermission'
    ];

    const VERIFY_TOKEN_WEBHOOK = '123456';

    const FACEBOOK_APP_ID = '323277902069047';

    const FACEBOOK_APP_SECRET = 'e636c41947b6b9f36ff9118610fcf346';

    const FACEBOOK_PAGE_ID = 109083637602185;

    const FACEBOOK_QUOC_QUANG_ID = 3827193310641421;

    const FACEBOOK_HOOK_PAGE = 'page';

    const FACEBOOK_HOOK_USER = 'user';

    const FACEBOOK_HOOK_PERMISSION = 'permission';

    const FACEBOOK_FEED_ITEM_COMMENT = 'comment';

    const FACEBOOK_FEED_ITEM_STATUS = 'status';

    const FACEBOOK_FEED_ITEM_REACTION = 'reaction';
}
