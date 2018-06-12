@extends('layouts.app')

@section('content')

    <div class="card" style="width: 60rem">
        <!--Display Validation Errors-->


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




    <div class="container" style="margin-top: 20px">
        <div class="card" style="width: 20rem;">
            <form>
                <div class="form-group">
                    <div class="card-header">
                        <label for="new_tasks">
                            Добавление новой задачи
                        </label>
                    </div>
                    <div class="card-body">

                        <input type="text" class="form-control" id="new_tasks" style="margin-bottom: 20px">
                        <div class="btn-primary btn">Добавить задачу</div>

                    </div>
                </div>
            </form>
        </div>
        <div class="card" style="width: 20rem">
            <div class="card-header">
                Все задачи
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">dfdsalfjlsf alkdf
                    <button class="btn-danger btn">Удалить</button>
                </li>
                <li class="list-group-item">dfdsalfjlsf alkdf</li>
                <li class="list-group-item">dfdsalfjlsf alkdf</li>
                <li class="list-group-item">dfdsalfjlsf alkdf</li>
            </ul>
        </div>
    </div>

    <h1>Hello, world!</h1>
@endsection