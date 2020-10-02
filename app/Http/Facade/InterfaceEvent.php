<?php

namespace App\Http\Facade;

/**
 * Interface InterfaceEvent
 * @package App\Http\Facade
 */
interface InterfaceEvent {

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
