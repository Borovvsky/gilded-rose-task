<?php
namespace App;

class DefaultUpdater implements UpdateableItem
{
    public function __construct(private Item $item) {}

    public function updateQuality(): void
    {
        if ($this->item->quality > 0) {
            $this->item->quality--;
        }
        $this->item->sell_in--;

        if ($this->item->sell_in < 0 && $this->item->quality > 0) {
            $this->item->quality--;
        }
    }
}