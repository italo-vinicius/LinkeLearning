@extends('home');

@section('titulo', 'Timeline')

@section('content')
<div class="float-right w-1/2">
        <!-- component -->
        <div class="py-10 container mx-auto px-5">
            <!-- component -->
            <div class="relative">
                <div class=" border-r-4 border-black absolute h-full top-0" ></div>
                <ul class="list-none m-0 p-0">
                {{--Laço For aqui--}}
                    <li class="mb-5  ">
                        <div class="flex group items-center ">
                            <div class="bg-gray-800 group-hover:bg-red-700 z-10 rounded-full border-4 border-black  h-5 w-5">
                                <div class="bg-black h-1 w-6 items-center  ml-4 mt-1"></div>
                            </div>
                            <div class="flex-1 ml-4 z-10 font-medium">
                                <div class=" order-1 space-y-2 bg-gray-800 rounded-lg shadow-only transition-ease lg:w-5/12 px-6 py-4">
                                    <h3 class="mb-3 font-bold text-white text-2xl">Programação Orientada a Objetos</h3>
                                    <p class="pb-4 text-sm text-gray-100">16/03/2023</p>
                                    <hr />
                                    <p class="text-sm font-medium leading-snug tracking-wide text-gray-300 text-opacity-100">Poo é uma parada foda que ajuda na manutenbilidade  e perfomance do codigo..aprende ai meus mano</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
@endsection

@section('fontehome')

@endsection


@section('fontetimeline')
    dark:text-white
@endsection
