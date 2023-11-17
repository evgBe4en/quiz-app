@extends('layouts.app')

@section('content')

    <style>
        .container {
            display: flex;;
            flex-direction: column;
            background-color: #fff;
            margin: 0 300px;
            padding: 20px
        }

        table {
            border-collapse: separate;
            border-spacing: 8px;
        }

        .unit {
            text-align: center;
            padding: 5px;
            background-color: lightgray;
            width: 40px;
            height: 40px;
        }

    </style>
    <div class="container">
        <div style="display: flex; justify-content: space-between">
            <h2>Статистика</h2>
            <a href="/" style="color: cadetblue">На головну</a>
        </div>

        <table>
            <thead style="text-align: start">
            <tr>
                <th class="unit">Iм`я</th>
                <th class="unit">Всього</th>
                <th class="unit">Правильнi</th>
                <th class="unit">Неправильнi</th>
            </tr>
            </thead>
            <tbody>
            @forelse($results as $result)
                <tr>
                    <td class="unit">{{ $result->user->name }}</td>
                    <td class="unit">{{ $result->total }}</td>
                    <td class="unit">{{ $result->correct }}</td>
                    <td class="unit">{{ $result->incorrect }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Немає результатів</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
