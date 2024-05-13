<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex w-full items-center justify-center p-3 lg:px-4 lg:py-2.5 bg-gray-100 rounded-xl font-semibold text-xs text-amber-700 uppercase tracking-widest hover:bg-gray-200 active:bg-gray-300 transition duration-200']) }}>
    {{ $slot }}
</button>
