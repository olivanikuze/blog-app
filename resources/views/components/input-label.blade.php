@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black-700 dark:text-blue-300']) }}>
    {{ $value ?? $slot }}
</label>
