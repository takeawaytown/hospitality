<?php

namespace TakeawayTown\Hospitality\Exceptions;

use InvalidArgumentException;

class MenuCategoryAlreadyExists extends InvalidArgumentException
{
    public static function create(string $categoryName)
    {
        return new static("A `{$categoryName}` menu category already exists.");
    }
}
