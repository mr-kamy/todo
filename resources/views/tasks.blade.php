@extends('layouts.app')

@section('content')

    <div class="card" style="width: 60rem">
        <!--Display Validation Errors-->
    @include('common.errors')
    <!--New Task Form-->
        <form action="{{ url('task') }}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
                <label for="task" class="col-sm-2">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>

                <!--Add Task Button-->
                <div class="offset-sm-1 col-sm-3">
                    <button type="submit" class="btn btn-primary">Add task</button>
                </div>
            </div>
        </form>
    </div>


    @if (count($tasks) > 0)
        <div class="card" style="width: 60rem">
            <div class="card-header">
                Все задачи
            </div>
            <ul class="list-group list-group-flush">
                @foreach($tasks as $task)
                    <li class="list-group-item">{{ $task->name }}
                        <form action="{{ url('task/'.$task->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn-danger btn">Удалить</button>
                        </form>

                    </li>
                @endforeach
            </ul>
        </div>
        </div>
    @endif




@endsection