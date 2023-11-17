@extends('layouts.app')


@section('content')
    <div style="display: flex; align-items: center;justify-content: center;height: 100%; margin-top: 15%">
        <ul style="list-style-type: none; margin-right: 70px; ">
            <li style="padding: 20px; background-color: lightgreen; border-radius: 10px">
                <a style="text-decoration: none" href="/quiz">Почати тест</a>
            </li>
            <li style="padding: 20px; margin-top: 5px; background-color: lightblue; border-radius: 10px">
                <a style="text-decoration: none" href="/results">Таблиця лiдерiв</a>
            </li>
        </ul>
    </div>
@endsection
