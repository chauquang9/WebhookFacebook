<?php

namespace App\Http\Facebook\WebHookPermission;

use App\Http\Facebook\AbstractEvent;
use App\Http\Facebook\Constant;
use App\Http\Facebook\InterfaceEvent;

/**
 * Class PageManagePostEvent
 * @package App\Http\Facade\WebHookPermission
 */
class PageManagePostEvent extends AbstractEvent implements InterfaceEvent
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
