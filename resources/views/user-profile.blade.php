<x-layout>
    <x-slot:heading></x-slot:heading>

    @if (Auth::user()->admin == 0)
    <div class="flex flex-row justify-between" style="gap:100px;">
        <div class="bg-white shadow-md rounded-md w-1/3 p-8 flex flex-col">
            <p class="text-lg text-center mt-12">Профиль пользователя <b>{{ $user->login }}</b></p>
            <button class="bg-gray-800 hover:bg-gray-700 text-white mt-auto py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                Изменить пароль
            </button>
            <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 mt-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                Сменить почту
            </button>
            <button class="bg-red-800 hover:bg-red-700 text-white py-2 px-4 mt-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                Удалить аккаунт
            </button>
        </div>
        <form class="bg-white shadow-md rounded-md p-8 w-2/3">
            <h2 class="font-semibold text-lg text-center mb-4">Помогите проекту, предложите новое слово</h2>
            <p class="text-red-500 text-sm mb-4 font-semibold">если требуется ввести больше одного значения, то отделите их точкой с запятой ; </p>
            <div class="mb-4 flex gap-x-5">
                <p class="w-1/2">Слово на японском языке: </p>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="login" type="text" placeholder="参る; 詣る">
            </div>
            <div class="mb-4 flex gap-x-5">
                <p class="w-1/2">Произношение слова каной/ромадзи: </p>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="login" type="text" placeholder="まいる">
            </div>
            <div class="mb-4 flex gap-x-5">
                <p class="w-1/2">Значение слова на русском языке: </p>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="login" type="text" placeholder="идти, пойти, направляться; проигрывать; растеряться">
            </div>
            <div class="mb-4 flex gap-x-5">
                <p class="w-1/2">Часть слова: </p>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="login" type="text" placeholder="годан глагол; непереходной глагол">
            </div>
            <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 mt-4 w-1/3 rounded focus:outline-none focus:shadow-outline" type="submit">
                Отправить
            </button>
            </div>
        </form>
    </div>
    @endif
</x-layout>