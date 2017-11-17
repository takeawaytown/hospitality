<?php

namespace TakeawayTown\Hospitality\Exceptions;

use InvalidArgumentException;

class MenuCategoryDoesNotExist extends InvalidArgumentException
{
    public static function create(string $categoryName)
    {
        return new static("No menu category named `{$categoryName}` exists.");
    }
}
