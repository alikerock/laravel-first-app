@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <form action="{{route('bikes.update',['bike'=>$bike->id])}}" class="form bg-whtie p-6 border-1" method="POST">
        @csrf
        @method('PUT') <!--리소스를 업데이트 하기 위한 요청으로 변경 -->
        <div>
            <label class="text-sm" for="bike-name">Bike name</label>
            <input class="text-lg border-1" type="text" id="bike-name" value="{{$bike->name}}" name="bike-name">
            @error('bike-name')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="bike-price">Bike Price</label>
            <input class="text-lg border-1" type="text" id="bike-price" value="{{$bike->price}}" name="bike-price">
            @error('bike-price')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label class="text-sm" for="bike-brand">Bike Brand</label>
            <input class="text-lg border-1" type="text" id="bike-brand" value="{{$bike->brand}}" name="bike-brand">
            @error('bike-brand')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror            
        </div>
        <div>            
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>

</div>
@endsection