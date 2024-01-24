<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private array $items;

    private GildedRoseItemFactory $gildedRoseItemFactory;

    /**
     * @param Item[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
        $this->gildedRoseItemFactory = new GildedRoseItemFactory();
    }

    public function updateQuality(): void
    {
        array_map(
            function (Item $item) {
                $this->gildedRoseItemFactory->createGildedRoseItem($item)->ageByOneDay();
            },
            $this->items
        );
    }
}
