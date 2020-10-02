<?php


namespace App\Http\Facade\GraphAPI;

use App\Http\Facade\Constant;
use App\Http\Facade\FacadeFacebook;
use App\Http\Facade\Support\ConstructFacebook;
use App\Http\Facade\Support\Token;

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
        /**
         * @var Token $token
         */
        $token = FacadeFacebook::token();
        $accessToken = $token->getAccessToken();

        $fb = ConstructFacebook::construct();

        $response = $fb->post(
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
            $accessToken
        );

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
