@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('quiz.submit') }}"
          style="display: flex; ;flex-direction: column; background-color:#fff; margin: 0 300px; padding: 20px">
        @csrf
        <div style="display: flex; justify-content: space-between">
            <h2>Тест</h2>
            <a href="/" style="color: cadetblue">На головну</a>
        </div>
        <input
            style="width: 150px; height: 30px"
            type="text"
            name="name"
            placeholder="Ваше ім'я"
            value="{{ old('name') }}"
        />
        @error('name')
        <div
            style="font-size: 14px; color: white; background-color:#d62d3e; width: fit-content; margin-top: 5px">{{ $message }}</div>
        @enderror

        @foreach($questions as $question)
            <div style="padding: 5px; text-align: start; margin-top: 15px">
                {{ $question->id }}. {{ $question->text }}
            </div>
            @foreach($question->answers as $answer)
                <div>
                    <input
                        required
                        type="radio"
                        name="answer_{{ $question->id }}"
                        value="{{ $answer->id }}"
                        {{ old("answer_{$question->id}") == $answer->id ? 'checked' : '' }}
                    />
                    {{ $answer->answer_text }}
                </div>
            @endforeach

            @error("answer_{$question->id}")
            <div style="font-size: 14px; color: white; background-color:#d62d3e; width: fit-content; margin-top: 5px">
                *{{ $message }}</div>
            @enderror
        @endforeach

        <button style="margin-top: 20px;">Завершити</button>
    </form>
@endsection
