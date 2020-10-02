<?php

namespace App\Http\Facade;

/**
 * Class Constant
 * @package App\Http\Facade
 */
class Constant
{
    const DIRECTORY_FACADE_PAGE = [
        'directory' => 'Http/Facade/WebHookPage',
        'namespace' => 'App\Http\Facade\WebHookPage'
    ];

    const DIRECTORY_FACADE_USER = [
        'directory' => 'Http/Facade/WebHookUser',
        'namespace' => 'App\Http\Facade\WebHookUser'
    ];

    const DIRECTORY_FACADE_PERMISSION = [
        'directory' => 'Http/Facade/WebHookPermission',
        'namespace' => 'App\Http\Facade\WebHookPermission'
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
