    @extends('layouts.layout')
    
    @section('content')
    @include('partials.header');   
        <ul id="myUL">
            @if(Session::has('info'))
                <div class="alert alert-info">
                    {{Session::get('info')}}
                </div>
            @endif
            @foreach ($tasks as $task)
            <li>
                <div class="task">
                    {{$task->name}}
                </div>
                <div class="action">
                <a href="{{route('getEdit', ['id' => $task->id])}}"><i class="fa fa-edit"></i></a>
                </div>
                <div class="action">
                <a href="{{route('deleteTask', ['id' => $task->id])}}"><i class="fa fa-trash-alt"></i></a> 
                </div>
            </li>  
            @endforeach 
                  
        </ul>
    @endsection