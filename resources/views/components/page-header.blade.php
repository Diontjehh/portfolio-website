<div class="flex items-center justify-center min-h-[60vh] pt-16">
    <div class="text-center max-w-2xl">
        <div class="flex justify-center">
            @if ($page->header_image)
                <img src="{{ asset($page->header_image) }}" alt="{{ $page->header_image->alt ?? '' }}" class="rounded-full w-44 h-44" />
            @endif
        </div>

        <h3 class="text-lg font-BebasNeue font-bold mt-6">
            {{ $page->header_name }}
        </h3>

        <h1 class="text-4xl sm:text-5xl font-bold mt-2">
            {{ $page->header_title }} <br>
        </h1>

        <p class="text-gray-400 mt-4 font-OpenSans text-lg max-w-xl mx-auto">
            {{ $page->header_description }}
        </p>        

        <div class="mt-6 flex justify-center gap-4 font-OpenSans">
            @if ($page->cta_1_link)
                <x-primary-button href="{{ $page->cta_1_link }}" wire:navigate>
                    {{ $page->cta_1_text ?? '' }}
                </x-primary-button>
            @endif
            @if ($page->cta_2_link)
                <x-primary-button href="{{ $page->cta_2_link }}" wire:navigate>
                    {{ $page->cta_2_text ?? '' }}
                </x-primary-button>
            @endif
        </div>

        
    </div>
</div>
