<?php

namespace App\Http\Facebook\GraphAPI;

use App\Http\Chatbot\InterfaceBot;
use App\Http\Facebook\FacadeFacebook;
use App\Http\Facebook\Support\ConstructFacebook;
use App\Http\Facebook\Support\Token;

/**
 * Class AbstractGraphAPI
 * @package App\Http\Facade\GraphAPI
 */
abstract class AbstractGraphAPI
{
    /**
     * @var \Facebook\Facebook
     */
    protected $fb;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var InterfaceBot
     */
    protected $bot;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        /**
         * @var Token $token
         */
        $token = FacadeFacebook::token();
        $accessToken = $token->getAccessToken();

        $this->fb = ConstructFacebook::construct();
        $this->accessToken = $accessToken;
        $this->bot = app()->make(InterfaceBot::class);
    }
}
