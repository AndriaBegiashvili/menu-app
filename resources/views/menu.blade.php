@extends('templates.template')
@section('title', 'Menu')

@section('body')
@php
    use App\Models\Menu;
    $distinctKeys = Menu::select('type')->distinct()->get();
@endphp

    <h1>{{$results[0]->type}}</h1>

    @foreach ($results as $rows)
        <form  action="/type/{{$rows->type}}" method="POST">
        @csrf
        <h4>{{$rows->food_name}}</h4>
        <select name="type" class="form-select d-inline-block w-25">
            <option selected value="{{$rows->type}}">{{$rows->type}}</option>
            @foreach ($distinctKeys as $key)
                @continue($key->type == $rows->type)
                <option value="{{$key->type}}">{{$key->type}}</option>
            @endforeach
        </select>
        <label for="priority">Priority:</label>
        <input class="form-control d-inline-block w-25" type="number" name="priority" value="{{$rows->priority}}"> <br>

        <br>
        <button class="btn btn-danger m-1" name="delete" value="{{$rows->food_name}}">Delete</button>
        <button class="btn btn-primary m-1" name="food_name" value="{{$rows->food_name}}">Change</button>
    </form>
        <hr>
    @endforeach

    <form action="/type/{{$results[0]->type}}" method="post">
        @csrf
        <input class="form-control d-inline-block w-25" type="text" name="food_name_add" placeholder="Name"> <br>
        <input class="form-control d-inline-block w-25" type="number" name="priority_add" placeholder="Priority"> <br>
        <button class="btn btn-success m-1" name="add" value="{{$results[0]->type}}">შექმნა</button>
    </form>





@endsection