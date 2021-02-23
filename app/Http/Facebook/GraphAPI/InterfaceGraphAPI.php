<?php

namespace App\Http\Facebook\GraphAPI;

/**
 * Interface InterfaceGraphAPI
 * @package App\Http\Facebook\GraphAPI
 */
interface InterfaceGraphAPI
{
    /**
     * @param $message
     * @param $id
     * @return mixed
     */
    public function post($message, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $message
     * @param $id
     * @return mixed
     */
    public function put($message, $id);

    /**
     * @return mixed
     */
    public function get();
}
