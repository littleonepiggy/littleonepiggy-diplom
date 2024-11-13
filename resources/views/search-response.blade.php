@php
    $paginator = $words->links()->paginator;
@endphp
<x-layout>

    <x-search url="/search/" options="?page=1" search="{{ preg_replace('/\/search\//', '', urldecode(request()->getPathInfo())) }}" />

    @if (!empty($words->toArray()['data']))

        <p class="pb-2 w-full text-gray-500">
            Всего показано: {{ $paginator->lastItem() }} слов из {{ $paginator->total() }} возможных
        </p>

        <div class="bg-white py-5 shadow-lg h-full" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
            @foreach ($words as $word)
            <div class='py-5 max-w-6xl mx-auto grid-cols-7 grid-rows-1 grid' style="box-shadow: 0px 1px 0px rgba(0,0,0,.1)">
                <div class="col-span-2">
                @if ($word['kanji'] == '')
                    <h1 class='text-4xl font-medium'>{{ $word['reading'] }}</h1>
                @else
                    <p class="text-xl"> {{ $word['reading'] }} </p>
                    <h1 class='text-4xl font-medium'>{{ $word['kanji'] }}</h1> 
                @endif
                </div>
                <div class="col-span-5 ms-2">
                    <div>
                    @foreach ($word['gloss'] as $gloss_key => $gloss)
                        <p> {{count($word['gloss']) > 1 ? $gloss_key + 1 . ') ' : ''}}{{ $gloss }}</p>
                    @endforeach
                    </div>
                    <div class="mt-3 text-gray-500">
                    @foreach ($word['position'] as $position_item)
                        <p>{{ $position_item }}</p>
                    @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="max-w-6xl mx-auto flex">
            <div class="w-full">
                {{ $words->links() }}
            </div>
        </div>
    
    @else 
    <div class='pt-20 max-w-6xl mx-auto my-auto max-h-full text-center text-gray-500 text-xl'>
        <p>По вашему запросу ничего не найдено</p>
    </div>
    @endif

</x-layout>