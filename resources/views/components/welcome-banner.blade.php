<div class="slider relative overflow-hidden max-h-96 w-full">
    @foreach ($this->getSlidersProperty() as $index => $slider)
        <img src="{{ asset($slider['image']) }}" alt="{{ $slider['name'] }}" 
             class="slide w-full h-full object-cover transition-opacity duration-500 ease-in-out 
             {{ $index == 0 ? 'opacity-100' : 'opacity-0' }}">
    @endforeach
    <div class="max-w-xl py-32 mx-auto text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
            Tu Belleza a Domicilio.
            <span class="text-indigo-600">Boutique de Belleza</span>
            <span role="img" aria-hidden="true">👋</span>
        </h1>
    </div>
</div>
<section class="bg-gray-50 section-below-slider z-50">       
        <div class="grid grid-cols-6 gap-2 mt-8">
        @foreach ($this->getSubcaProperty() as $index => $subcat)
            <figure class>
                <img src="{{ asset($subcat['image']) }}" alt="{{ $subcat['name'] }}" class="w-full h-full">
            </figure>
        @endforeach        
        
        </div>
        
</section>

{{--Botones por agregar
    <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a class="block w-full px-12 py-3 font-medium text-white bg-indigo-600 rounded shadow sm:w-auto active:bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring"
                    href="https://lunarphp.io/"
                    target="_blank"
                    rel="noopener noreferrer">
                        Lunar Website
                    </a>
                    <a class="block w-full px-12 py-3 font-medium text-indigo-600 rounded shadow sm:w-auto hover:text-indigo-700 active:text-indigo-500 focus:outline-none focus:ring"
                    href="https://github.com/lunarphp/demo-store"
                    target="_blank"
                    rel="noopener noreferrer">
                        Demo Store Repo
                    </a>
                </div>--}}