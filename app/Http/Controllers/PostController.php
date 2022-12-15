<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //各種データの取得
    public function index()
    {
        $items = Post::with(['user','like','comment'])->get();
        return response()->json([
            'data' => $items
        ], 200);
    }
    public function store(Request $request)
    {
        if(User::find($request->user_id)){
            $item = Post::create($request->all());
            $item = Post::with(['user', 'like', 'comment'])->find($item->id);
            return response()->json([
                'data' => $item
            ], 201);
        }else{
            return response()->json([
                'message'=>'This User is Not Found'
            ],404);
    }
    }
    public function show(Post $post)
    {

        $item=Post::with(['user','like','comment','comment.user'])->find($post);
        if($item){
            return response()->json([
                'data'=>$item,
        ],200);
        }else{
            return response()->json([
                'message'=>'Not found'
            ],404);
        }
    }
    public function destroy(Post $post)
    {
        $item=Post::where('id',$post->id)->delete();
        if($item){
            return response()->json([
                'message'=>'Deleted successfully'
            ],200);
        }else{
            return response()->json([
                'message'=>'Not found'
            ],404);
        }
        
    }
}
