<x-layout>
    <x-slot:heading></x-slot:heading>
    <div class="bg-white mt-12 py-10 mb-24 shadow-lg" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
        <div class="max-w-6xl mx-auto text-2xl text-center">
            <h3 class="font-semibold my-10">{{ $name }}</h3>
            
            <form action="{{ route("test.check") }}" method="GET">
                <input type="hidden" name="id" value="{{ $id }}">
                @foreach ($questions as $question=>$answers)
                    <div class="mb-8 bg-red-400 py-2 text-white" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
                        <h4 class="">{{ $question }}</h4>
                        <div class="flex flex-row justify-center gap-5">
                            @foreach ($answers as $answer)
                                <div>
                                    <label for="{{ $question }}_{{ $answer }}">{{$answer}}</label>
                                    <input type="radio" name="{{ $question }}" id="{{ $question }}_{{ $answer }}" value="{{$answer}}" required>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="text-lg text-white py-2 px-4 rounded-lg bg-red-600">Проверить</button>
            </form>
        </div>
    </div>

</x-layout>