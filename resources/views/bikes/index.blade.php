@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if (count($bikes) > 0)
        @foreach ($bikes as $bike)
            <div>
                <h3>
                    <a href="{{route('bikes.show',['bike' => $bike['id']])}}">{{$bike['name']}}</a>
                    <!-- bikes라는 컨트롤러내 show 함수에 인수명 bike에 id를 전달 -->                    
                <h3>
                <div>
                    - Made by : {{$bike['brand']}}
                </div>
                
            </div>
        @endforeach
    @else
        <h2>출력할 내용이 없습니다.</h2>
    @endif
    <div>
        user Input: {{$userInput}}
    </div>
</div>
@endsection