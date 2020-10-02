<?php

namespace App\Http\Facade\GraphAPI;

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

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
