<?php

namespace App\Http\Facebook;

use App\Http\Chatbot\BotInterface;
use App\Http\Facebook\GraphAPI\Messenger;

/**
 * Class EventAbstract
 * @package App\Http\Facade
 */
abstract class EventAbstract
{
    /**
     * @var null
     */
    public $event = NULL;

    /**
     * @var null
     */
    public $hook = NULL;

    /**
     * @var BotInterface|null
     */
    public $bot = NULL;

    /**
     * EventAbstract constructor.
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        $this->bot = app()->make(BotInterface::class);
    }

    /**
     * @param array $data
     * @return false|string
     */
    public function action(array $data)
    {
        try {
            /**
             * @var Messenger $messenger
             */
            $messenger = FacadeFacebook::messenger();
            $message = $this->getMessage($data);

            return $messenger->post($message, env('FACEBOOK_QUOC_QUANG_ID'));
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        } catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getMessage(array $data)
    {
        switch ($this->hook) {
            case Constant::FACEBOOK_HOOK_PAGE:
                $message = $data['entry'][0]['changes'][0]['field'];

                break;
            case Constant::FACEBOOK_HOOK_USER;
                $message = $data['entry'][0]['changed_fields'][0];

                break;
            case Constant::FACEBOOK_HOOK_PERMISSION:
                $message = $data['entry'][0]['changed_fields'][0];

                break;
            default:
                $message = 'Quang is the best';
        }

        return $message;
    }
}
