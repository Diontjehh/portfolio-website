@props(['content'])

<div class="py-10 lg:py-16">
    <x-container class="flex flex-col gap-12 lg:grid lg:grid-cols-2 lg:items-center">
        <div class="flex flex-col">
            @if ($content->title)
                <h2 class="mb-6 text-2xl font-bold font-lora text-green-950 lg:text-3xl">{{ $content->title }}</h2>
            @endif
            @if ($content->text)
                <p>{{ $content->text }}</p>
            @endif
        </div>

        <div class="relative flex justify-center items-center">
            <img src="{{ asset($content->image) ?? null }}" alt="{{ $content->image_alt ?? null }}" class="aspect-square rounded-lg overflow-clip block w-4/5 h-4/5 object-cover" />
        </div>
    </x-container>
</div>
