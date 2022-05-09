@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="ml-2">Изменить данные</h2>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Упс!</strong>Не правильный инпут<br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row container justify-content-between">
            <div class="ol-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:</strong>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Имя">
                </div>
            </div>
            <div class="ol-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Предмет:</strong>
                    <input type="text" name="course" value="{{$student->course}}" class="form-control"
                           placeholder="Курс">
                </div>
            </div>
            <div class="ol-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Оценка:</strong>
                    <input type="number" name="fee" value="{{$student->fee}}" class="form-control" placeholder="Оценка">
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
