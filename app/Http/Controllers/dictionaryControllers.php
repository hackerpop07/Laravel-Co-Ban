<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dictionaryControllers extends Controller
{
    public function viewDictionary()
    {
        return view("SimpleDictionary.view");
    }

    public function Dictionary(Request $request)
    {
        $input = $request->input;
        $English = ["hello", "hi", "bye"];
        $vietnam = ["Xin chào", "ahihi", "Tạm biệt"];
        $flag = true;
        foreach ($English as $key => $value) {
            if ($input == $value) {
                $flag = false;
                $viet = $vietnam[$key];
                return view('SimpleDictionary.display', compact('viet'));
            }
        }
        if ($flag) {
            return view('SimpleDictionary.error');
        };
    }
}
