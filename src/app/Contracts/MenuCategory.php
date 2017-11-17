<?php

namespace TakeawayTown\Hospitality\Contracts;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface MenuCategory
{
    /**
     * A menu category can own many items.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menu_items(): HasMany;

    /**
     * Find a menu category by its name.
     *
     * @param string $name
     *
     * @throws \TakeawayTown\Hospitality\Exceptions\MenuCategoryDoesNotExist
     *
     * @return MenuCategory
     */
    public static function findByName(string $name): MenuCategory;
}
