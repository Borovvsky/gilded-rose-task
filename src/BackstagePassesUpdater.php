<?php
namespace App;

class BackstagePassesUpdater implements UpdateableItem
{
    public function __construct(private Item $item) {}

    public function updateQuality(): void
    {
        if ($this->item->sell_in > 0) {
            if ($this->item->quality < 50) {
                $this->item->quality++;
                if ($this->item->sell_in <= 10 && $this->item->quality < 50) {
                    $this->item->quality++;
                }
                if ($this->item->sell_in <= 5 && $this->item->quality < 50) {
                    $this->item->quality++;
                }
            }
        } else {
            $this->item->quality = 0;
        }
        $this->item->sell_in--;
    }
}