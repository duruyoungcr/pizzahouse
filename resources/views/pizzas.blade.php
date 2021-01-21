@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizzas
        </div>
        @foreach ($pizzas as $pizza)
            <p>{{ $pizza['name'] }} - {{ $pizza['type'] }} - {{ $pizza['size'] }}</p>
            @if ($loop->first)
                <span>- First on the list</span>
            @elseif($loop->last)
                <span>- Last on the list</span>
            @endif
        @endforeach
        <p>{{ $name }}</p>
        {{-- @if ($pizza !== 'small')
            <p>This pizza is not small</p>
        @else
            <p>This is definitely a small pizza</p>
        @endif --}}
    </div>
</div>   
@endsection