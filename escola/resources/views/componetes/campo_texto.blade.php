@props(['label', 'name', 'type' => 'text'])
<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
</div>