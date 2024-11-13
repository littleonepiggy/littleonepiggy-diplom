<x-layout>
    <x-search url="/adjectives/"/>

    @if (!isset($err))

        @if (!empty($adjectives)) 

            <div class="bg-white py-10 mb-24 shadow-lg" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
                <div class="max-w-6xl mx-auto text-2xl grid grid-cols-2">
                    <div>
                        <div class="flex justify-between">
                            <h1 class="text-2xl w-max">
                                {{ $adjectives['plain']['present'] }} — {{ $adjectives['type'] }}
                                @if ($adjectives['type'] == 'и-прилагательное')
                                <span class="text-xl text-gray-500">(с い-окончанием)</span>
                                @elseif ($adjectives['type'] == 'на-прилагательное') 
                                <span class="text-xl text-gray-500">(квазиприлагательное)</span>
                                @else 
                                @endif
                            </h1>
                            <svg class="verb-question-button self-center inline w-7 h-7 text-gray-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"/>
                              </svg>
                        </div>
                          
                        @if ($adjectives['type'] == 'и-прилагательное') 

                        @elseif ($adjectives['type'] == 'на-прилагательное') 

                        @else 

                        @endif 
                    </div>
                </div>
            </div>

            <div class="bg-gray-200 shadow-lg h-full mx-auto">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-white uppercase bg-sky-600 dark:bg-gray-600 dark:text-gray-400">
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
                            {{-- словарная форма --}}
                            <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-sky-600 border-b ">
                                <th scope="row" rowspan=2 class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" style="width:0.1%;white-space: nowrap;">
                                    Словарная форма
                                </th>
                                <td class="px-6 py-4" style="width:0.1%;white-space: nowrap;">
                                    Разговорная речь
                                </td>
                                <td class="px-6 py-4">
                                    {{ $adjectives['plain']['present'] }}
                                </td>
                                <td class="px-6 py-4 flex flex-col"> 
                                    <p>
                                        {{ $adjectives['plain']['present_negative'] }}
                                    </p>
                                    @if ($adjectives['type'] == 'на-прилагательное') 
                                        <p>
                                            {{ $adjectives['plain']['present_negative_second'] }}
                                        </p>
                                    @endif
                                </td>
                            </tr>
                            <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-sky-500 border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    Вежливая речь
                                </th>
                                <td class="px-6 py-4 text-white">
                                    {{ $adjectives['polite']['present'] }}
                                </td>
                                <td class="px-6 py-4 text-white d-flex flex-col">
                                    <p>{{ $adjectives['polite']['present_negative'] }}</p>
                                    <p>{{ $adjectives['polite']['present_negative_second'] }}</p>
                                </td>
                            </tr>
                            {{-- форма прошлого времени --}}
                            <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-sky-500 border-b ">
                                <th scope="row" rowspan=2 class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" style="width:0.1%;white-space: nowrap;">
                                    Форма прошлого времени
                                </th>
                                <td class="px-6 py-4" style="width:0.1%;white-space: nowrap;">
                                    Разговорная речь
                                </td>
                                <td class="px-6 py-4">
                                    {{ $adjectives['plain']['past'] }}
                                </td>
                                <td class="px-6 py-4 flex flex-col"> 
                                    <p>
                                        {{ $adjectives['plain']['past_negative'] }}
                                    </p>
                                    @if ($adjectives['type'] == 'на-прилагательное') 
                                        <p>
                                            {{ $adjectives['plain']['past_negative_second'] }}
                                        </p>
                                    @endif
                                </td>
                            </tr>
                            <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-sky-500 border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    Вежливая речь
                                </th>
                                <td class="px-6 py-4 text-white">
                                    {{ $adjectives['polite']['past'] }}
                                </td>
                                <td class="px-6 py-4 text-white flex flex-col">
                                    {{ $adjectives['polite']['past_negative'] }}
                                    @if ($adjectives['type'] == 'на-прилагательное') 
                                        <p>
                                            {{ $adjectives['polite']['past_negative_second'] }}
                                        </p>
                                        <p>
                                            {{ $adjectives['polite']['past_negative_third'] }}
                                        </p>
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        @else 

        <div class='pt-20 max-w-6xl mx-auto my-auto max-h-full text-center text-gray-500 text-xl'>
            <p>Введите ваш запрос</p>

        </div>        

        @endif

    @else 

    <div class='pt-20 max-w-6xl mx-auto my-auto max-h-full text-center text-gray-500 text-xl'>
        <p>{{ $err['err'] }}</p>
    </div>
    @endif

</x-layout>