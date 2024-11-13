<x-layout>

    <x-search url="/search/" options="?page=1"/>

    <div class="flex flex-wrap justify-center">
        <a href="{{ route('verbs') }}" class="block">
            <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-emerald-500 transition-all duration-300 group-hover:scale-[10]"></span>
                <div class="relative z-10 mx-auto max-w-md flex flex-col h-full">
                    <span class="grid h-20 w-20 place-items-center rounded-full bg-emerald-500 transition-all duration-300 group-hover:bg-emerald-400 text-white text-2xl">
                        動詞
                    </span>
                    <div
                        class="text-lg space-y-6 pt-5 leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <p>Спряжение <strong>итидан</strong> и <strong>годан</strong> глаголов с подробным объяснением каждого случая</p>
                    </div>
                    <div class="pt-5 text-base font-semibold leading-7 mt-auto">
                        <p>
                            <a href="{{ route('verbs') }}" class="inline-block text-emerald-600 text-lg transition-all duration-300 group-hover:text-white w-full">
                                Попробовать &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('adjectives') }}" class="block">
            <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
                <div class="relative z-10 mx-auto max-w-md flex flex-col h-full">
                    <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400 text-white text-2xl">
                        形容詞
                    </span>
                    <div
                        class="text-lg space-y-6 pt-5 leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <p>Склонение <strong>и-прилагательных</strong> и <strong>на-прилагательных</strong>, </p>
                    </div>
                    <div class="pt-5 text-base font-semibold leading-7 mt-auto">
                        <p>
                            <a href="{{ route('adjectives') }}" class="text-sky-600 text-lg transition-all duration-300 group-hover:text-white">
                                Попробовать &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-red-500 transition-all duration-300 group-hover:scale-[10]"></span>
                <div class="relative z-10 mx-auto max-w-md flex flex-col h-full">
                    <span class="grid h-20 w-20 place-items-center rounded-full bg-red-500 transition-all duration-300 group-hover:bg-red-400 text-white text-2xl">
                        試験
                    </span>
                    <div
                        class="text-lg space-y-6 pt-5 leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <p>Разнообразные тесты на знание японского языка</p>
                    </div>
                    <div class="pt-5 text-base font-semibold leading-7 mt-auto">
                        <p>
                            <a href="#" class="text-red-600 text-lg transition-all duration-300 group-hover:text-white">Попробовать
                                &rarr;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </div>

</x-layout>

    