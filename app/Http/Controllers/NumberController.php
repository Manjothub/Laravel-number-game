<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NumberController extends Controller
{
    public function index(Request $request): View
    {
        $userNumber = $request->input('number');
        $generatedNumber = $this->generateRandomNumber();

        $isMatch = $this->compareNumbers($userNumber, $generatedNumber);

        return view('welcome', [
            'generatedNumber' => $generatedNumber,
            'userNumber' => $userNumber,
            'isMatch' => $isMatch,
        ]);
    }

    private function generateRandomNumber(): int
    {
        return rand(1, 100);
    }

    private function compareNumbers($userNumber, $generatedNumber): bool
    {
        return $userNumber == $generatedNumber;
    }
}
