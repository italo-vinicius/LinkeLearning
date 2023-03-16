@extends('home');

@section('titulo', 'Timeline')

@section('content')
    <div class="fixed left-60 flex flex-col items-center justify-center  p-8">
        <p class="max-w-lg text-5xl font-semibold leading-loose text-gray-900 dark:text-white mb-4">VOCÊ ESTÁ A</p>
        <p class="text-purple-600 font-semibold text-7xl border-4 border-b-emerald-400 rounded w-32 p-4 flex justify-center items-center mb-4">{{count($posts)}}</p>
        <p class="max-w-lg text-5xl font-semibold leading-loose text-red-600">DIAS NA OFENSIVA</p>
    </div>


    <div class="float-right w-1/2">
        <!-- component -->
        <div class="py-10 container mx-auto px-5">
            <!-- component -->
            <div class="relative">
                <div class=" border-r-4 border-black absolute h-full top-0"></div>
                <ul class="list-none m-0 p-0">
                    {{--Laço For aqui--}}
                    @foreach($posts->reverse() as $post)
                        <li class="mb-5">
                            <div class="flex group items-center">
                                <div
                                    class="bg-gray-800 group-hover:bg-red-700 z-10 rounded-full border-4 border-black  h-5 w-5">
                                    <div class="bg-black h-1 w-6 items-center ml-4 mt-1"></div>
                                </div>
                                <div class="flex-1 ml-4 z-10 font-medium">
                                    <div
                                        class="order-1 space-y-2 bg-gray-800 rounded-lg shadow-only transition-ease lg:w-5/12 px-6 py-4">
                                        <a href="{{route('editPost', [$post->user_id, $post->id])}}">
                                            <button class="mb-3 font-bold text-green-600 text-2xl hover:pointer"
                                                    data-target="form-container">
                                                {{$post->title}}
                                            </button>
                                        </a>
                                        <p class="pb-4 text-sm text-gray-100">{{$post->created_at->format('d/m/y')}}</p>
                                        <hr/>
                                        <p class="text-sm font-medium leading-snug tracking-wide text-gray-300 text-opacity-100 text-justify">
                                            {{$post->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <script>
        const button = document.querySelector('[data-target="form-container"]');
        const formContainer = document.getElementById('form-container');

        button.addEventListener('click', function () {
            formContainer.classList.toggle('hidden');
        });

    </script>
    <br>

@endsection






@section('fontehome')
@endsection


@section('fontetimeline')
    dark:text-white
@endsection
