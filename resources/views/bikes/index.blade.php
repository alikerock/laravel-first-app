@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @foreach ($bikes as $bike)
        <div>
            <h3>
                {{$bike['name']}}
                <div>
                    - Made by : {{$bike['brand']}}
                </div>
            <h3>
        </div>
    @endforeach
    <div>
        user Input: {{$userInput}}
    </div>
</div>
@endsection