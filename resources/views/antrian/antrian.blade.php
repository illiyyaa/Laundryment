@extends('layouts.apphome')
@extends('layouts.header1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Todo List</div> --}}
                <div class="panel-body">
                    <a href="{{ url('/antrian/tambahantrian') }}" class="btn" style="background-color: #4bbd89; color: #FFFFFF">Tambah Cucian</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Is Done</th>
                                <th>Action</th>
                            </th>

                            @if(! count($queues))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($queues as $queue)
                                <tr>
                                    <td>{{ $queue->name }}</td>
                                    <td>{{ $queue->is_done ? 'Done' : 'Not Done' }}</td>
                                    <td>
                                        <a class="btn" style="background-color: #4bbd89; color: #FFFFFF" href="{{ url('antrian/edit'.$queue->id.'antrian/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('antrian/antrian'.$queue->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Todo List</div> --}}
                <div class="panel-body">
                    <a href="{{ url('/antrian/tambahantrian') }}" class="btn" style="background-color: #4bbd89; color: #FFFFFF">Tambah Jemur</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Is Done</th>
                                <th>Action</th>
                            </th>

                            @if(! count($queues))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($queues as $queue)
                                <tr>
                                    <td>{{ $queue->name }}</td>
                                    <td>{{ $queue->is_done ? 'Done' : 'Not Done' }}</td>
                                    <td>
                                        <a class="btn" style="background-color: #4bbd89; color: #FFFFFF" href="{{ url('antrian/edit'.$queue->id.'antrian/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('antrian/antrian'.$queue->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Todo List</div> --}}
                <div class="panel-body">
                    <a href="{{ url('/antrian/tambahantrian') }}" class="btn" style="background-color: #4bbd89; color: #FFFFFF">Tambah Setrika</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Is Done</th>
                                <th>Action</th>
                            </th>

                            @if(! count($queues))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($queues as $queue)
                                <tr>
                                    <td>{{ $queue->name }}</td>
                                    <td>{{ $queue->is_done ? 'Done' : 'Not Done' }}</td>
                                    <td>
                                        <a class="btn" style="background-color: #4bbd89; color: #FFFFFF" href="{{ url('antrian/edit'.$queue->id.'antrian/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('antrian/antrian'.$queue->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection


{{-- @section('head')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.css" />
    <script src="script.js"></script>
    <style>
        body {
 margin: 0;
 min-width: 250px;
}
/* Include the padding and border in an element’s total width and height */
* {
 box-sizing: border-box;
}
/* Remove margins and padding from the list */
ul {
 margin: 0;
 padding: 0;
}
/* Style the list items */
ul li {
 cursor: pointer;
 position: relative;
 padding: 12px 8px 12px 40px;
 list-style-type: none;
 background: #eee;
 font-size: 18px;
 transition: 0.2s;
 
 /* make the list items unselectable */
 -webkit-user-select: none;
 -moz-user-select: none;
 -ms-user-select: none;
 user-select: none;
}
/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
 background: #f9f9f9;
}
/* Darker background-color on hover */
ul li:hover {
 background: #ddd;
}
/* When clicked on, add a background color and strike out text */
ul li.checked {
 background: #888;
 color: #fff;
 text-decoration: line-through;
}
/* Add a “checked” mark when clicked on */
ul li.checked::before {
 content: ‘’;
 position: absolute;
 border-color: #fff;
 border-style: solid;
 border-width: 0 2px 2px 0;
 top: 10px;
 left: 16px;
 transform: rotate(45deg);
 height: 15px;
 width: 7px;
}
/* Style the close button */
.close {
 position: absolute;
 right: 0;
 top: 0;
 padding: 12px 16px 12px 16px;
}
.close:hover {
 background-color: #f44336;
 color: white;
}
/* Style the header */
.header {
 background-color: #4bbd89;
 padding: 30px 40px;
 color: white;
 text-align: center;
 margin-left: -29%;
  margin-top: 10%;
  position: absolute;
}
/* Clear floats after the header */
.header:after {
 content: "";
 display: table;
 clear: both;
}
ul#myUL {
    position: absolute;
    margin-top: 24%;
    margin-left: -29%;
    width: 32%;
}
/* Style the input */
input {
 margin: 0;
 border: none;
 border-radius: 0;
 width: 75%;
 padding: 10px;
 float: left;
 font-size: 16px;
}
/* Style the “Add” button */
.addBtn {
 padding: 10px;
 width: 25%;
 background: #d9d9d9;
 color: #555;
 float: left;
 text-align: center;
 font-size: 16px;
 cursor: pointer;
 transition: 0.3s;
 border-radius: 0;
}
.addBtn:hover {
 background-color: #bbb;
}
    </style>

</head>

@section('content')
<body>

    <div id="myDIV" class="header">
      <h2 style="margin:5px">My To Do List</h2>
      <form method="POST" action="{{ route('create') }}" >
        <input type="text" name="queue" id="myInput" placeholder="Title…">
        <input type="submit" value="Add" class="addBtn">
      {{ csrf_field() }}
      </form>
    </div>
    <ul id="myUL">
    @foreach($queues as $queue)
      <li onclick="location.href='{{ route('update', ['id'=>$queue->id]) }}'"
            @if($queue->status) class="checked" 
            @endif>
          {{ $queue->content }} 
            <a href="'{{ route('delete', ['id'=>$queue->id]) }}'" 
            class="close">X</a>
      </li>
    @endforeach
    </ul> 
</body>
 --}}

{{-- <footer>
{{-- <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>    
                </div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                </div>
            </div>
        </div> --}}
{{-- @endsection --}}

{{-- @extends('layouts.appreg')
@extends('layouts.header1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <img src="/img/orang.jpg" style="border-radius: 50%"> 
       
        
    </div>
</div>
<footer>
<div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: none;"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>    
                </div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <br>
                    <div class="row" style="margin-left: 360px;">
                        
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Cuci
                                </div><a>
                        </div>
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Jemur
                                </div><a>
                        </div>
                        <div class="card col-md-2" style="background-color: #4bbd89; margin-right: 50px;">
                                <a href="#"><div class="card-body" style="color: #FFFFFF">
                                Setrika
                                </div><a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
@endsection --}}
