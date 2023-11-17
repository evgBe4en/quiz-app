@extends('layouts.app')
@section('content')

    <div style="display: flex; ;flex-direction: column; background-color:#fff; margin: 0 300px; padding: 20px">
        <div style="display: flex; justify-content: space-between">
            <h2>Тест</h2>
            <a href="/" style="color: cadetblue">На головну</a>
        </div>
        <div>
            <p>
                Ви пройшли тест!
                <br>
                <br>
                Ось ваш результат:
            </p>
        </div>
        <div>Всього питань: {{$result->total}}</div>
        <div>Вiрних вiдповiдей: {{$result->correct}}</div>
        <div>Невiрних вiдповiдей: {{$result->incorrect}}</div>
    </div>

@endsection
