<?php

namespace Bus\Facades;

use Bus\Service\Order\Application as Order;
use Bus\Service\User\Application as User;
use Illuminate\Support\Facades\Facade;

/**
 * Class Bus
 * @package Bus\Facades
 * @method static User user
 * @method static Order order
 */
class Bus extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'bus';
    }

    public static function __callStatic($method, $args)
    {
        return resolve($method);
    }
}