<?php

namespace TakeawayTown\Hospitality\Exceptions;

use InvalidArgumentException;

class MenuItemDoesNotExist extends InvalidArgumentException
{
    public static function create(string $itemName)
    {
        return new static("No menu item named `{$itemName}` exists.");
    }
}
