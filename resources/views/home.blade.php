@extends('base')

@section('titulo', 'Home')

@section('content')
    <div class="p-4 w-full max-w-[640px]">

        <form action="{{route('createPost', $id)}}" method="post">
            @csrf
            <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                <input type="text" placeholder="Título" value="{{old('title')}}" id="small-input" name="title"
                       class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <br>

            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                    <label for="comment" class="sr-only"></label>
                    <textarea id="comment" rows="4"
                              class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                              placeholder="O que você aprendeu hoje?" name="content"
                              required>{{old('content')}}</textarea>
                </div>

                <div id="links-container" class="link-input-group px-4 py-2 bg-white dark:bg-gray-800">
                    <div class="link-input-group px-4 py-2 bg-white dark:bg-gray-800">
                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quer
                            registrar algum link de onde você aprendeu isso? :) (opcional)</label>
                        <input type="url" placeholder="https://exemplo.com" value="{{old('link')}}" id="link"
                               name="link[]"
                               class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                    <button type="submit"
                            class=" text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Publicar
                    </button>
                    <button type="button" id="add-link-button" class="w text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Adicionar Link</button>

                    @error('errors')
                    <div
                        class="flex items-center w-full p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-700 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ $message }}</span>
                    </div>
                    @enderror
                </div>

            </div>
        </form>
<script>
    const addLinkButton = document.getElementById('add-link-button');
    const linksContainer = document.getElementById('links-container');

    let linkCount = 1;

    addLinkButton.addEventListener('click', () => {
        const newLinkInputGroup = document.createElement('div');
        newLinkInputGroup.classList.add('link-input-group');
        newLinkInputGroup.innerHTML = `
        <label for="link${linkCount}"></label>
        <input type="url" placeholder="https://exemplo.com" value="{{old('link')}}" id="link${linkCount}" name="link[]" class="dark:bg-gray-800 block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
`;


        linksContainer.appendChild(newLinkInputGroup);
        linkCount++;
    });

</script>
        @endsection

        @section('fontehome')
            dark:text-white
@endsection
