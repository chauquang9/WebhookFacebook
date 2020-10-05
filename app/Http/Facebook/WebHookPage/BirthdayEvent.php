<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class BirthdayEvent
 * @package App\Http\Facade\WebHookPage
 */
class BirthdayEvent extends EventAbstract implements EventInterface
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
