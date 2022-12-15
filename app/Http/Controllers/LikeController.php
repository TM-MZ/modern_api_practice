<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;

class LikeController extends Controller
{
    //
    public function store(Request $request)
    {
        Like::create($request->all());
        $item = Post::with(['user', 'like', 'comment'])->find($request->post_id);
        return response()->json([
            'data'=>$item
        ],201);
    }
    public function destroy(Like $like)
    {
        $item=Like::where('id',$like->id)->delete();
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
