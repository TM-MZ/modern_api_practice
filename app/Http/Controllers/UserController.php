<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //ユーザーの新規登録
    public function store(Request $request)
    {
        $item=User::create($request->all());
        return response()->json([
            'data'=>$item
        ],201);
    }
}
