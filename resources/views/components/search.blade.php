<form class="max-w-full mx-auto mt-12 mb-24" onsubmit="formSendSearch(this, event, '{{$url}}', '{{$options}}')" method="GET"> 
    
    {{-- добавить спряжение/склонение --}}

    <div class="relative">
        <input type="search" name="search" id="default-search" placeholder="Введите желаемое слово..." required value="{{ $search }}"
        class="h-16 text-lg block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />          
        <button type="submit" class="text-white absolute end-2.5 bottom-3 bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </button>
    </div>  
</form>