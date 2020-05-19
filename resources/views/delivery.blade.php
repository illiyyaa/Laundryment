@extends('layouts.apphome')
@extends('layouts.header1')

@section('head')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.css" />
    <script src="script.js"></script>
</head>

@section('content')
<body>
    <div class="container" 
    style="    
    position: absolute;
    margin-top: 20%;
    margin-left: -20%;">
    <div class="row justify-content-center">
        <div class="all-tasks">
            <h2 class="task-list-title">My lists</h2>
            <ul class="task-list" data-lists></ul>
            <form action="" data-new-list-form>
                <input 
                type="text"
                class="new list"
                data-new-list-input
                placeholder="new list name"
                aria-label="new list name"/><button class="btn create" aria-label="create new list">+</button>
            </form>
        </div>

        <div class="todo-list" data-list-display-container>
            <div class="todo-header">
                <h2 class="list-title" data-list-title>Cuci</h2>
                <p class="task-count" data-list-count>3 tasks remaining</p>
            </div>

        <div class="todo-body">
            <div class="tasks" data-tasks></div>
                <div class="new-task-creator">
                <form action="" data-new-task-form>
                    <input 
                    type="text"
                    data-new-task-input
                    class="new task"
                    placeholder="new task name"
                    aria-label="new task name"
                    />
                    <button class="btn create" aria-label="create new task">+</button>
                </form>
            </div>

        <div class="delete-stuff">
          <button class="btn delete" data-clear-complete-tasks-button>Clear completed tasks</button>
          <button class="btn delete" data-delete-list-button>Delete list</button>
        </div>
        </div>
        </div>

   
    </div>
    <template id="task-template">
      <div class="task">
        <input type="checkbox" />
        <label>
          <span class="custom-checkbox"></span>
        </label>
      </div>
    </template>
 
        
    </div>
</div>
</body>

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
@endsection
