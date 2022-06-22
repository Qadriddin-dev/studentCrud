@extends('students.layout')

@section('content')
    <div class="pull-left">
        <h2 class="ml-2">Список студентов</h2>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Предмет</th>
            <th>Оценка</th>
            <th width="280px">Действие</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->fee}}</td>
                <td>
                    <form action="{{route('students.destroy',$student->id)}}" method="POST">
                        <a href="{{route('students.edit',$student->id)}}" class="btn btn-outline-dark">Изменить</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-leg-12 margin-tb">
            <div class="pull-right">
                <a href="{{route('students.create')}}" class="btn btn-outline-success ml-4 mb-3">Добавить нового
                    студента</a>
            </div>
        </div>
    </div>

