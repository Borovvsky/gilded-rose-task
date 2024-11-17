<?php
namespace App;

class SulfurasUpdater implements UpdateableItem
{
    public function __construct(private Item $item)
    {
        if ($this->item->quality != 80) {
            $this->item->quality = 80;
        }
    }

    public function updateQuality(): void
    {

    }
}