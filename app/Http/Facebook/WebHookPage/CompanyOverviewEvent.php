<?php

namespace App\Http\Facebook\WebHookPage;

use App\Http\Facebook\EventAbstract;
use App\Http\Facebook\Constant;
use App\Http\Facebook\EventInterface;

/**
 * Class CompanyOverviewEvent
 * @package App\Http\Facade\WebHookPage
 */
class CompanyOverviewEvent extends EventAbstract implements EventInterface
{
    /**
     * @var string
     */
    public $event = 'company_overview';

    /**
     * @var string
     */
    public $hook = Constant::FACEBOOK_HOOK_PAGE;

    /**
     * @param array $data
     * @return mixed|string
     */
    public function getMessage(array $data)
    {
        return $data['entry'][0]['changes'][0]['value'];
    }
}
