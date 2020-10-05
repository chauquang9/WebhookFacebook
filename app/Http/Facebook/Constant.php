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

    const FACEBOOK_HOOK_PAGE = 'page';

    const FACEBOOK_HOOK_USER = 'user';

    const FACEBOOK_HOOK_PERMISSION = 'permission';

    const FACEBOOK_FEED_ITEM_COMMENT = 'comment';

    const FACEBOOK_FEED_ITEM_STATUS = 'status';

    const FACEBOOK_FEED_ITEM_REACTION = 'reaction';
}
