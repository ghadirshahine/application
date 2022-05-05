<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Like;
use Dotenv\Validator;

class LikeController extends Controller
{

    
    public function store(Request $request)
    {
        $input = $request->all();
        //$like_count =0;
        //$dislike_count=0;
        // $post->likes -> $like;
        //if ($like->like==1){
        //    $like_count++;
        //}
        //if ($like->like==0){
        //    $dislike_count++;
        //}

        $validator = Validator::make($input,[
            'like'=> 'required',
            
        ]);

        if ($validator->fails()){
            return $this->sendError('Please validate error',$validator->errors());
        }
        $post = Post::create($input);
        return $this->sendResponse(new PostResource($post),'Like created successfully');

       

    }
}
