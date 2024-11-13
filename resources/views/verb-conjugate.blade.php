<x-layout>
    <x-search url="/verbs/" search="{{ preg_replace('/\/verbs\/|\/verbs/', '', urldecode(request()->getPathInfo())) }}" />

    @if (!isset($err))
        
        @if (!empty($verbs)) 

            <x-verbs.verb-block :verbs="$verbs" />

        @else 

        <div class="bg-white shadow-lg " style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
            <x-verbs.verb-help />
        </div>
        @endif

    @else 

    <div class='pt-20 max-w-6xl mx-auto my-auto max-h-full text-center text-gray-500 text-xl'>
        <p>{{ $err['err'] }}</p>
    </div>

    @endif
</x-layout>