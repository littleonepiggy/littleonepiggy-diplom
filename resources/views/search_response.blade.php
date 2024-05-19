<x-layout>
    <x-slot:heading></x-slot:heading>
    <form class="max-w-full h-full mx-auto mt-12 mb-24" onsubmit="formSend(this, event)" method="GET" accept-charset="UTF-8">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" class="h-16 text-lg block w-full p-4 ps-10 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Введите желаемое слово..." required value="{{ $query ?? $query}}" />
            <button type="submit" class="text-white absolute end-2.5 bottom-3 bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Искать
            </button>
        </div>
    </form>
    <p class="pb-2 w-full text-gray-500">Всего результатов: {{ count($words) }}</p>
    <div class="bg-white py-5 shadow-lg h-full" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
        @foreach ($words as $word)
        <div class='py-5 max-w-6xl mx-auto grid-cols-6 grod-rows-1 grid' style="box-shadow: 0px 1px 0px rgba(0,0,0,.1)">
            <div class="col-span-1">
            @if ($word['kanji'] == '')
                <h1 class='text-4xl font-medium'>{{ $word['reading'] }}</h1>
            @else
                <p class="text-xl"> {{ $word['reading'] }} </p>
                <h1 class='text-4xl font-medium'>{{ $word['kanji'] }}</h1> 
            @endif
            </div>
            <div class="col-span-5">
                <div>
                @foreach (preg_replace('/^\s/', '', preg_split('/\\d\\)/', $word['gloss'],  -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE)) 
                    as $gloss_key => $gloss_item)
                    @if (count(preg_replace('/^\s/', '', preg_split('/\\d\\)/', $word['gloss'],  -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE)))
                     == 1)
                        @foreach (preg_split('/\\;/', $word['gloss'],  -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE)
                        as $gloss_item_second)
                            <p>{{ $gloss_item_second . ';' }}</p>
                        @endforeach
                    @else
                        <p>{{ $gloss_key + 1 . ') ' . $gloss_item }}</p>
                    @endif
                @endforeach
                </div>
                <div class="mt-3 text-gray-500">
                    {{ $word['position'] }} 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>