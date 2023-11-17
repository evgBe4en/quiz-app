<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();

        return view('question.index', compact('questions'));
//        return response()->json($questions);
    }

    private function countAnswers($questions, $answers)
    {

        $counts = [
            'total' => 0,
            'correct' => 0,
            'incorrect' => 0
        ];

        foreach ($questions as $question) {

            $counts['total']++;

            $correctAnswer = $question->answers->where('is_correct', 1)->first()->id;

            if ($answers["answer_{$question->id}"] == $correctAnswer) {
                $counts['correct']++;
            } else {
                $counts['incorrect']++;
            }
        }

        return $counts;

    }

    public function submit(QuestionRequest $request)
    {

        $questions = Question::with('answers')->get();
        $formData = $request->all();
        $userName = $request->name;

        $answers = $this->getAnswers($formData);

        $user = User::firstOrCreate(['name' => $userName]);
        $userId = $user->id;

        Result::updateOrCreate(
            ['user_id' => $userId],
            $this->countAnswers($questions, $answers)
        );
        return redirect()->route('result.show');
    }

    private function getAnswers($formData)
    {
        return array_filter($formData, function ($key) {
            return strpos($key, 'answer_') === 0;
        }, ARRAY_FILTER_USE_KEY);
    }

}
