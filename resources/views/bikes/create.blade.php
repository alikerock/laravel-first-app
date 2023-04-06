@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <form action="{{route('bikes.store')}}" class="form bg-whtie p-6 border-1" method="POST">
        @csrf
        <div>
            <label class="text-sm" for="bike-name">Bike name</label>
            <input class="text-lg border-1" type="text" id="bike-name" name="bike-name">
        </div>
        <div>
            <label class="text-sm" for="bike-price">Bike Price</label>
            <input class="text-lg border-1" type="text" id="bike-price" name="bike-price">
        </div>
        <div>
            <label class="text-sm" for="bike-brand">Bike Brand</label>
            <input class="text-lg border-1" type="text" id="bike-brand" name="bike-brand">
        </div>
        <div>            
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>

</div>
@endsection