<?php

namespace App\Http\Facebook;

/**
 * Interface EventInterface
 * @package App\Http\Facade
 */
interface EventInterface {

    /**
     * @param array $data
     * @return mixed
     */
    public function action(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function getMessage(array $data);
}
