<?php

namespace App\Http\Facade\WebHookPermission;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\InterfaceEvent;

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
