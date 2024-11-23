@props(['isActive' => false])

@php
    $classActive = ($isActive ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white');
    $isAriaCurrent = ($isActive ? 'page' : false);
@endphp

<a {{ $attributes }} class="block lg:inherit rounded-md px-3 py-2 text-sm font-medium {{ $classActive }}" aria-current="{{ $isAriaCurrent }}">{{ $slot }}</a>
