@props(['active' => false])
<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <a {{ $attributes }}
        class="{{ $active ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md  px-3 py-2 text-sm font-medium ">{{ $slot }}</a>
</div>
