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
     * @param int $id
     * @return \Facebook\GraphNodes\GraphNode
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function sendMessageToUser($message, $id = Constant::FACEBOOK_QUOC_QUANG_ID)
    {
        $botResponse = $this->bot->question($message);
        $response = $this->fb->post(
            '/' . Constant::FACEBOOK_PAGE_ID . '/messages',
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
