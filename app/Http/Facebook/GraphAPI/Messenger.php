<?php


namespace App\Http\Facebook\GraphAPI;

use App\Http\Facebook\Constant;

/**
 * Class Messenger
 * @package App\Http\Facade\Messenger
 */
class Messenger extends AbstractGraphAPI
{
    /**
     * @param $message
     * @param $id
     * @return \Facebook\GraphNodes\GraphNode
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function post($message, $id)
    {
        $botResponse = $this->bot->question($message);
        $response = $this->fb->post(
            '/' . env('FACEBOOK_PAGE_ID') . '/messages',
            array(
                'messaging_type' => 'RESPONSE',
                "recipient" => [
                    "id" => $id
                ],
                "message" => [
                    "text" => $botResponse
                ]
            ),
            $this->accessToken
        );

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
