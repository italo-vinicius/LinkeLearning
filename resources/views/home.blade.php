@extends('base')

@section('titulo', 'Home')

@section('content')
    <div class="p-4 w-full max-w-[640px]">

        <form action="{{route('createPost', $id)}}" method="post">
            @csrf
            <div>
                <label for="small-input" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                <input type="text" placeholder="Título" id="small-input" name="title"
                       class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                    <label for="comment" class="sr-only"></label>
                    <textarea id="comment" rows="4"
                              class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                              placeholder="O que você aprendeu hoje?" name="content" required></textarea>
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

@endsection

@section('fontehome')
    dark:text-white
@endsection
