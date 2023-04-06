@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <!-- {{print_r($bike)}} 임시로 넘어온 값 확인 -->
    <div>
        <h3>
            {{$bike['name']}}
        <h3>
        <h2>
            {{$bike['price']}}
        </h2>
        <div>
            - Made by : {{$bike['brand']}}
        </div>
        
    </div>

</div>
@endsection