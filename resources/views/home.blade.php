<x-layout>
    <x-slot:heading></x-slot:heading>
    <form class="max-w-full h-full px-36 mx-auto mt-12 mb-24">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="h-16 text-lg block w-full p-4 ps-10 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Введите желаемое слово..." required />
            <button type="submit" class="text-white absolute end-2.5 bottom-3 bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Искать
            </button>
        </div>
    </form>
    <div class="flex flex-wrap justify-center">
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
                        <a href="#" class="text-emerald-600 text-lg transition-all duration-300 group-hover:text-white">Попробовать
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>
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
                        <a href="#" class="text-sky-600 text-lg transition-all duration-300 group-hover:text-white">Попробовать
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>
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
        
    </div>
</x-layout>

