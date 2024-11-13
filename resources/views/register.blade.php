<x-layout>
    <x-slot:heading></x-slot:heading>
    <form class="bg-white shadow-md rounded-md p-8 mb-4 w-2/4 mt-10 mx-auto" action="{{ route("register.store") }}" method="POST">
        @csrf
        <h2 class="font-semibold text-lg text-center mb-5">Зарегистрируйтесь</h2>
        <div class="mb-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="login" type="text" placeholder="Логин">
        </div>
        <div class="mb-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Имя">
        </div>
        <div class="mb-4">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="Почта">
        </div>
        <div class="mb-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Пароль">
        <p class="text-xs italic hidden"></p>
        </div>
        <div class="mb-6">
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="Повторите пароль">
            <p class="text-xs italic hidden"></p>
            </div>
        <div class="flex items-center justify-between">
        <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Зарегистрироваться
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800" href="{{ route('login') }}">
            Уже есть аккаунт?
        </a>
        </div>
    </form>
</x-layout>