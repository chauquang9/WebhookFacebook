<?php

namespace App\Http\Facebook\GraphAPI;

use App\Http\Facebook\Constant;

/**
 * Class Page
 * @package App\Http\Facade\GraphAPI
 */
class Page extends AbstractGraphAPI
{
    /**
     * @param $message
     * @param $pageId
     * @return \Facebook\GraphNodes\GraphNode
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function post($message, $pageId)
    {
        $response = $this->fb->post(
            '/'.$pageId.'/feed',
            array(
                'message' => $message
            ),
            $this->accessToken
        );

        $graphNode = $response->getGraphNode();

        return $graphNode;
    }
}
