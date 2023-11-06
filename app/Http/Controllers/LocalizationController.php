<?php

namespace App\Http\Controllers;

class LocalizationController extends Controller
{
    /**
     * Handle switch language
     */
    public function __invoke($language = 'en')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }
}
