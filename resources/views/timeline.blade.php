@extends('home');

@section('titulo', 'Timeline')

@section('content')
    <div class="w-2/5 sm:2/3 flex-none p-2">
        <div
            class="text-gray-700 lg:float-right float-left border-2 rounded border-green-200 bg-green-200 shadow-lg px-2">
            <blockquote class="twitter-tweet">
                <a href="https://twitter.com/It4lo_dev/status/1632405003481632770?s=20"></a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
@endsection

@section('fontehome')

@endsection


@section('fontetimeline')
    dark:text-white
@endsection
