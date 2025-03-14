<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Url;

class Home extends Component
{
    /**
     * Return the sale collection.
     */
    public function getSaleCollectionProperty(): Collection | null
    {
        return Url::whereElementType((new Collection)->getMorphClass())->whereSlug('sale')->first()?->element ?? null;
    }

    /**
     * Return all images in sale collection.
     */
    public function getSaleCollectionImagesProperty()
    {
        if (! $this->getSaleCollectionProperty()) {
            return null;
        }

        $collectionProducts = $this->getSaleCollectionProperty()
            ->products()->inRandomOrder()->limit(4)->get();

        $saleImages = $collectionProducts->map(function ($product) {
            return $product->thumbnail;
        });

        return $saleImages->chunk(2);
    }

    /**
     * Return a random collection.
     */
    public function getRandomCollectionProperty(): ?Collection
    {
        $collections = Url::whereElementType((new Collection)->getMorphClass());

        if ($this->getSaleCollectionProperty()) {
            $collections = $collections->where('element_id', '!=', $this->getSaleCollectionProperty()?->id);
        }

        return $collections->inRandomOrder()->first()?->element;
    }

    /**
     * Return the sliders array.
     */
    public function getSlidersProperty()
    {
        return [
            ['name' => 'Mujer', 'image' => 'storage/Banners/banner.jpg'],
            ['name' => 'Hombre', 'image' => 'storage/Banners/banner2.jpg'],
            ['name' => 'Mujer', 'image' => 'storage/Banners/banner3.jpg'],
            ['name' => 'Hombre', 'image' => 'storage/Banners/banner4.jpg'],
        ];
    }

    /**
     * Return the SubCategries Array.
     */
    public function getSubcaProperty()
    {
        return [
            ['name' => 'Cabello', 'image' => 'storage/Banners/banner.jpg'],
            ['name' => 'Maquillaje', 'image' => 'storage/Banners/banner2.jpg'],
            ['name' => 'Uñas', 'image' => 'storage/Banners/banner3.jpg'],
            ['name' => 'Sex Shop', 'image' => 'storage/Banners/banner4.jpg'],
            ['name' => 'Cabello', 'image' => 'storage/Banners/banner.jpg'],
            ['name' => 'Maquillaje', 'image' => 'storage/Banners/banner2.jpg'],
        ];
    }
    
    public function render(): View
    {
        return view('livewire.home');
    }
}
