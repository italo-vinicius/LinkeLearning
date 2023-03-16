<!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Editar Post</title>

</head>
<body class="dark:bg-gray-800">

<nav class="border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <img
                src="https://png.pngtree.com/png-vector/20220627/ourmid/pngtree-initial-ll-letter-logo-design-png-image_5474900.png"
                class="h-6 mr-3 sm:h-9" alt="Flowbite Logo"/>
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Site Foda</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                     src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/554802fe-c63a-43b8-b1ce-903ae6324422/dao5ome-bbdfed98-9090-4cae-a57e-cadf00f8fab4.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzU1NDgwMmZlLWM2M2EtNDNiOC1iMWNlLTkwM2FlNjMyNDQyMlwvZGFvNW9tZS1iYmRmZWQ5OC05MDkwLTRjYWUtYTU3ZS1jYWRmMDBmOGZhYjQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.14oOP0i89ZCq47zq0w7uCEc7u8h0HBqnqjtd79zqCzE"
                     alt="Bordered avatar">
            </button>
            <!-- Dropdown menu -->
            <div
                class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">Italozera</span>
                    <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">italoviniciusrope@gmail.com</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Perfil</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Conquistas</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sair</a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>

                    <a href="{{route('homePage', $id)}}"
                       class="@yield('fontehome', '') block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    >Home</a>
                </li>
                <li>
                    <a href="{{route('timeline', $id)}}"
                       class="@yield('fontetimeline', 'dark:text-white') block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0  md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    >Linha do tempo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<form action="{{route('updatePost', $post)}}" method="post">
    @csrf
    @method('put')
    <div class="dark rounded-md px-9 py-10 max-w-2xl mx-auto justify-center items-center">
        <p class="text-lg font-medium text-gray-900 dark:text-white">Editar conteúdo</p>
        <div>
            <label for="small-input" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="text" value="{{$post->title}}" id="small-input" name="title"
                   class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <br>
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <label for="comment" class="sr-only"></label>
                <textarea id="comment" class="pt-2 h-48 leading-3 w-full wid px-0 text-lg text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" name="content" required> {{$post->content}}</textarea>
            </div>

            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Publicar
                </button>
            </div>
        </div>
</form>
</div>

</body>
</html>
