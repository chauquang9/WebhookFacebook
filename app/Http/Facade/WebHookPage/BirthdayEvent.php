<?php

namespace App\Http\Facade\WebHookPage;

use App\Http\Facade\AbstractEvent;
use App\Http\Facade\Constant;
use App\Http\Facade\InterfaceEvent;

/**
 * Class BirthdayEvent
 * @package App\Http\Facade\WebHookPage
 */
class BirthdayEvent extends AbstractEvent implements InterfaceEvent
{
    /**
     * @var string
     */
    public $event = 'birthday';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;
}
