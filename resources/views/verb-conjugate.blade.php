<x-layout>
    <x-slot:heading></x-slot:heading>
    <form class="max-w-full mx-auto mt-12 mb-24" onsubmit="formSendSearch(this, event, '/verbs/')" method="GET" accept-charset="UTF-8">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" class="h-16 text-lg block w-full p-4 ps-10 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Введите глагол..." required value="" />
            <button type="submit" class="text-white absolute end-2.5 bottom-3 bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Спрягать
            </button>
        </div>
    </form>
    @if (isset($verbs))
        <div class="bg-gray-200 shadow-lg h-full mx-auto">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-emerald-600 dark:bg-gray-600 dark:text-gray-400">
                        <tr>
                            <th scope="col" colspan=2 class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Обычная форма
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Негативная форма
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" rowspan=2 class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" style="width:0.1%;white-space: nowrap;">
                                Словарная форма
                            </th>
                            <td class="px-6 py-4" style="width:0.1%;white-space: nowrap;">
                                Разговорная речь
                            </td>
                            <td class="px-6 py-4">
                                {{ $verbs['plain']['dictionary'] }}
                            </td>
                            <td class="px-6 py-4"> 
                                {{ $verbs['plain']['dictionary_negative'] }}
                            </td>
                        </tr>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                Вежливая речь
                            </th>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['dictionary'] }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['dictionary_negative'] }}
                            </td>
                        </tr>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Форма прошлого времени
                            </th>
                            <td class="px-6 py-4">
                                Разговорная речь
                            </td>
                            <td class="px-6 py-4">
                                {{ $verbs['plain']['past'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $verbs['plain']['past_negative'] }}
                            </td>
                        </tr>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                Вежливая речь
                            </th>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['past'] }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['past_negative'] }}
                            </td>
                        </tr>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Волевая форма   
                            </th>
                            <td class="px-6 py-4">
                                Разговорная речь
                            </td>
                            <td class="px-6 py-4">
                                {{ $verbs['plain']['volitional'] }}
                            </td>
                            <td class="px-6 py-4">
                                    {{ $verbs['plain']['volitional_negative'] }}
                            </td>
                        </tr>
                        <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                Вежливая речь
                            </th>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['volitional'] }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $verbs['polite']['volitional_negative'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
    @endif
</x-layout>