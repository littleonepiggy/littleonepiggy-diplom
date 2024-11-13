<x-verbs.p-gray-text>{{ $verbs['other']['gloss'] }}</x-verbs.p-gray-text>

<div class="bg-white pt-10 shadow-lg" style="width: 100vw;position: relative;left: calc(-50vw + 50%);">
    <div class="max-w-6xl mx-auto text-xl mb-10 grid grid-cols-2">
        <div>
            <div class="flex justify-between">
                <h1 class="w-max">
                    {{ $verbs['other']['verb'] }} — {{ $verbs['other']['type'] }} глагол 

                    @if($verbs['other']['type'] == 'ичидан') 
                    <x-verbs.span-gray-text>(с る-окончанием)</x-verbs.verb-gray-text>

                    @elseif($verbs['other']['type'] == 'годан')
                    <x-verbs.span-gray-text>(с {{ $verbs['other']['verb_ending'] }}-окончанием)</x-verbs.verb-gray-text> 

                    @else 

                    @endif 
                </h1>
                <x-verbs.question-mark />
            </div>
              
            @if ($verbs['other']['type'] == 'ичидан') 
            <div class="flex justify-between my-4">
                <p> {{ $verbs['other']['verb_stem'] }} — основа глагола </p>
            </div>
            <div class="flex justify-between my-4">
                <p>{{ $verbs['other']['te-form'] }} — те-форма <span class="text-xl text-gray-500">(て形)</span></p>
                <x-verbs.question-mark />
            </div>
            @elseif ($verbs['other']['type'] == 'годан') 
                <p class="my-4">5 основ форм глагола:</p>

                @foreach ($verbs['other']['conjunctive'] as $form)
                    <div class="flex justify-between">
                        <p>{{ $form[0] }} — {{ $form[1] }} <span class="text-xl text-gray-500">({{ $form[2] }})</span> </p>
                        <x-verbs.question-mark />
                    </div>
                @endforeach

                <div class="flex justify-between my-4">
                    <p class="my-4">{{ $verbs['other']['te-form'] }} — те-форма <span class="text-xl text-gray-500">(て形)</span></p>
                    <x-verbs.question-mark />
                </div>
            @else 



            @endif 
        </div>
    </div>
    <div class="bg-gray-200 shadow-lg h-full max-w-6xl mx-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-white uppercase bg-emerald-600 dark:bg-gray-600 dark:text-gray-400">
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
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
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
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
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
                    {{-- форма прошлого времени --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
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
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
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
                    {{-- волевая форма --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Волевая форма   
                        </th>
                        <td class="px-6 py-4">
                            Разговорная речь
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['volitional'] }}
                        </td>
                        <td class="px-6 py-4 ">
                            <span class="pl-6">{{ $verbs['plain']['volitional_negative'] }}</span>
                            <svg class="inline float-end w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>                                       
                        </td>
                    </tr>
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            Вежливая речь
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['volitional'] }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            <span class="pl-6">{{ $verbs['polite']['volitional_negative'] }}</span>
                            <svg class="inline float-end w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>                                       
                        </td>
                    </tr>
                    {{-- повелительная форма --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Повелительная форма
                        </th>
                        <td class="px-6 py-4">
                            Разговорная речь
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['imperative'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['imperative_negative'] }}
                        </td>
                    </tr>
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            Вежливая речь
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['imperative'] }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['imperative_negative'] }}
                        </td>
                    </tr>
                    {{-- пассивная форма --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Пассивная форма
                        </th>
                        <td class="px-6 py-4">
                            Разговорная речь
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['passive'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['passive_negative'] }}
                        </td>
                    </tr>
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            Вежливая речь
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['passive'] }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['passive_negative'] }}
                        </td>
                    </tr>
                    {{-- потенциальная форма --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Потенциальная форма
                        </th>
                        <td class="px-6 py-4">
                            Разговорная речь
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['potential'] }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="pl-6">{{ $verbs['plain']['potential_negative'] }}</span>
                            <svg class="inline float-end w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>                                       
                        </td>
                    </tr>
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            Вежливая речь
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['potential'] }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            <span class="pl-6">{{ $verbs['polite']['potential_negative'] }}</span>
                            <svg class="inline float-end w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>                                       
                        </td>
                    </tr>
                    {{-- каузативная форма --}}
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" rowspan=2 class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Казуативная форма
                        </th>
                        <td class="px-6 py-4">
                            Разговорная речь
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['causative'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $verbs['plain']['causative_negative'] }}
                        </td>
                    </tr>
                    <tr class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-emerald-500 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            Вежливая речь
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['causative'] }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            {{ $verbs['polite']['causative_negative'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 

    <x-verbs.verb-help />
</div>
