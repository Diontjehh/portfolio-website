<a {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center font-semibold rounded-tr-lg ring-1 ring-inset whitespace-nowrap transition-[color,background-color,box-shadow] duration-200 
          hover:ring-black h-14 px-[1.375rem] gap-4']) }}>
    {{ $slot }}
</a>
