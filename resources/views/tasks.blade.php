@extends('layouts.app')
@section('content')


<div class="container" style="margin-top: 20px">
    <div class="card" style="width: 20rem;">
        <form>
            <div class="form-group">
                <div class="card-header">
                    <label for="new_tasks">
                        Заголовок
                    </label>
                </div>
                <div class="card-body">

                    <input type="text" class="form-control" id="new_tasks" style="margin-bottom: 20px">
                    <div class="btn-primary btn">Добавить задачу</div>

                </div>
            </div>
        </form>
    </div>
</div>

    <h1>Hello, world!</h1>
@endsection