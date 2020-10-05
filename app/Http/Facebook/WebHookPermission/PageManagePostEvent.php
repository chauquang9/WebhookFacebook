<?php

namespace App\Http\Facebook\WebHookPermission;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class PageManagePostEvent
 * @package App\Http\Facade\WebHookPermission
 */
class PageManagePostEvent extends EventAbstract implements EventInterface
{
    /**
     * @var string
     */
    public $event = 'pages_manage_posts';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PERMISSION;
}
