<a class=
        "{{ request()->getPathInfo() == $attributes['href'] ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} 
        rounded-md px-3 py-2 font-medium
        block md:inline text-base md:text-sm" 
    aria-current=
        "{{ request()->getPathInfo() == $attributes['href'] ? "page" : "false"}}" 
    {{ $attributes }} >
    
    {{ $slot }}

</a>

