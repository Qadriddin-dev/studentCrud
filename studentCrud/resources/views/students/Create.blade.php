@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="ml-2">Добавление Студента</h2>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Упс!</strong> Не правильный инпут<br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="row container justify-content-between">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:</strong>
                    <input required type="text" name="name" class="form-control" placeholder="Имя">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Предмет:</strong>
                    <input required type="text" name="course" class="form-control" placeholder="Предмет">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Оценка:</strong>
                    <input required type="number" name="fee" class="form-control" placeholder="Оценка">
                </div>
            </div>
            <div>
                <div class="col-lg-12 flex">
                    <div>
                        <a href="{{route('students.index')}}" class="btn btn-outline-dark">Назад</a>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button type="submit" class="btn btn-outline-primary">Добавить</button>
            </div>
        </div>
    </form>
@endsection
