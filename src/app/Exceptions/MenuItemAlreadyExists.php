<?php

namespace TakeawayTown\Hospitality\Exceptions;

use InvalidArgumentException;

class MenuItemAlreadyExists extends InvalidArgumentException
{
    public static function create(string $itemName)
    {
        return new static("A `{$itemName}` menu item already exists.");
    }
}
