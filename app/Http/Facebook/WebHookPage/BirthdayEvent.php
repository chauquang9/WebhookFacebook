<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\AbstractEvent;
use App\Http\Facebook\Constant;
use App\Http\Facebook\InterfaceEvent;

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
