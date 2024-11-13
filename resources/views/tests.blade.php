<x-layout>
    <x-slot:heading></x-slot:heading>
    
    <div class="bg-red-400 mt-24 py-10 mb-24 shadow-lg" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
        <div class="max-w-6xl mx-auto text-2xl text-white">
        @foreach ($tests as $test)
            <div class="pb-16">
                <a class="font-semibold underline" href="{{route('test', $test->id)}}">{{ $test->name }} &rarr; <span class="font-light text-xl">(всего {{ count(json_decode($test->questions, true)) }} вопросов)</span></a>
            </div>
        @endforeach
        </div>
    </div>

</x-layout>