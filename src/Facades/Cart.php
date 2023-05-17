<?php

namespace Abdelhamiderrahmouni\Cart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abdelhamiderrahmouni\Cart\Cart
 */
class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Abdelhamiderrahmouni\Cart\Cart::class;
    }
}
