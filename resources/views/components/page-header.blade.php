<div class="flex items-center justify-center min-h-[70vh] pt-16">
    <div class="text-center max-w-2xl">
        <div class="flex justify-center">
            @if ($page->header_image)
                <img src="{{ asset($page->header_image) }}" alt="{{ $page->header_image->alt ?? '' }}" class="rounded-full w-44 h-44" />
            @endif
        </div>

        <h3 class="text-lg font-bold mt-6">
            {{ $page->header_name }}
        </h3>

        <h1 class="text-4xl sm:text-5xl font-bold mt-2">
            {{ $page->header_title }} <br>
        </h1>

        <p class="text-gray-400 mt-4 text-lg max-w-lg mx-auto">
            {{ $page->header_description }}
        </p>        

        <div class="mt-6 flex justify-center gap-4">
            @foreach ($page->header_buttons as $button)
                <a href="{{ $button->link }}" class="px-6 py-3 rounded-full font-semibold shadow-md">
                    {{ $button->title }}
                </a>
            @endforeach
        </div>
    </div>
</div>
