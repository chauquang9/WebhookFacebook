<?php


namespace App\Http\Facade\GraphAPI;

use App\Http\Facade\Constant;

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
        $response = $this->fb->post(
            '/'.Constant::FACEBOOK_PAGE_ID.'/messages',
            array(
                'messaging_type' => 'RESPONSE',
                "recipient" => [
                    "id" => $id
                ],
                "message" => [
                    "text" => $message
                ]
            ),
            $this->accessToken
        );

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
