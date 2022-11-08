@extends('templates.template')
@section('title', 'Home')

@section('body')
    @foreach ($results as $rows)
        <h1>{{$rows[0]->type}}</h1>
        <ul class="list-group">
            @foreach ($rows as $row)
            <li class="list-group-item  " >{{$row->priority}}) {{$row->food_name}}</li>
            @endforeach
        </ul>
        <button class="btn btn-warning m-1" > <a href="/type/{{$rows[0]->type}}">ყველა კერძის ნახვა</a></button>
    @endforeach
    <hr>
    <form action="/" method="post">
        @csrf
        <input class="form-control d-inline-block w-25"  type="text" name="type" placeholder="Group"> <br>
        <input class="form-control d-inline-block w-25"  type="text" name="food_name" placeholder="Name"> <br>
        <input class="form-control d-inline-block w-25"  type="number" name="priority" placeholder="Priority"> <br>
        <button class="btn btn-success m-1">შექმნა</button>      
    </form>

    <form action="/info" method="post">
        @csrf
        <input name = "showinfo" placeholder="airchie">
        <button>naxva</button>
    </form>


    
@endsection