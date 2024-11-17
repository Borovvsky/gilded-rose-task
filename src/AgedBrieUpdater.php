<?php
namespace App;

class AgedBrieUpdater implements UpdateableItem
{
    public function __construct(private Item $item) {}

    public function updateQuality(): void
    {
        $this->item->sell_in--;
        if ($this->item->quality < 50) {
            $this->item->quality++;
            if ($this->item->sell_in < 0 && $this->item->quality < 50) {
                $this->item->quality++;
            }
        }
    }
}