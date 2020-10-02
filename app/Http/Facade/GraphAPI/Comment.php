<?php

namespace App\Http\Facade\GraphAPI;

use App\Http\Facade\Constant;
use App\Model\LogReplyFacebook;

/**
 * Class Comment
 * @package App\Http\Facade\GraphAPI
 */
class Comment extends AbstractGraphAPI
{
    /**
     * @param $message
     * @param $objectId
     * @param null $senderId
     * @return \Facebook\GraphNodes\GraphNode
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function post($message, $objectId, $senderId = NULL)
    {
        $response = $this->fb->post(
            '/'.$objectId.'/comments',
            [
                'message' => $message
            ],
            $this->accessToken
        );

        if(!empty($senderId)) {
            $dataInsert = [
                'sender_id' => $senderId,
                'message' => $message,
            ];
            LogReplyFacebook::create($dataInsert);
        }

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
