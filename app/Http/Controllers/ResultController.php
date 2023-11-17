<?php

namespace App\Http\Controllers;

use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = $this->getTopResults(10);

        return view('results', compact('results'));
    }

    private function getTopResults($limit)
    {
        return Result::with('user')
            ->orderByDesc('correct')
            ->take($limit)
            ->get();
    }

    public function show()
    {
        $result = Result::latest()->first();

        return view('result', compact('result'));
    }

}
