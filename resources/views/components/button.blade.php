<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex w-full items-center justify-center p-4 lg:px-4 lg:py-2.5 bg-amber-700 rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-800 hover:shadow active:bg-amber-900 transition duration-200']) }}>
    {{ $slot }}
</button>
