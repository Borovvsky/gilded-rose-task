<?php

namespace App;

final class Item implements UpdateableItem
{
    public function __construct(
        public string $name,
        public int $sell_in,
        public int $quality,
        private ?UpdateableItem $updater = null
    ) {}

    public function setUpdater(UpdateableItem $updater): void
    {
        $this->updater = $updater;
    }

    public function updateQuality(): void
    {
        $this->updater->updateQuality();
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}