<div>
    <x-welcome-banner />
    <div class="slider mx-auto">
    </div>
    <div class="px-4 mx-auto">
        @if ($this->saleCollection)
            <x-collection-sale />
        @endif

        @if ($this->randomCollection)
            <section>
                <h2 class="text-3xl font-bold">
                    {{ $this->randomCollection->translateAttribute('name') }}
                </h2>

                <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                    @foreach ($this->randomCollection->products as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</div>
