<?php

namespace App\Http\Controllers\Sohan;

use App\Helper\FlashMsg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private const BASE_PATH = 'tasks.';

    public function string_count_page(Request $request)
    {
        $sentence = $request->sentence;
        $charecter_or_word = $request->charecter_or_word;

        $result = 0;
        if(!is_null($sentence) && !is_null($charecter_or_word)){
          $result = sohan_custom_string_charecter_or_word_count($sentence,$charecter_or_word);
        }

        return view(self::BASE_PATH.'string-count',compact('result'));
    }
}
