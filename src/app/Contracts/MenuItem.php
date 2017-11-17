<?php

namespace TakeawayTown\Hospitality\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface MenuItem
{
    /**
     * A menu item can be owned by one category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu_category(): BelongsTo;

    /**
     * Find a menu item by its name.
     *
     * @param string $name
     *
     * @throws \TakeawayTown\Hospitality\Exceptions\MenuItemDoesNotExist
     *
     * @return MenuItem
     */
    public static function findByName(string $name): MenuItem;
}
