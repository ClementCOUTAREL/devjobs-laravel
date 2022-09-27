@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-gray-700 uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
