@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white': 'w-full bg-blue-500 text-white px-4 py-2 m-1 rounded-md hover:bg-blue-600'}} w-full bg-blue-500 text-white px-4 py-2 m-1 rounded-md hover:bg-blue-600"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>
