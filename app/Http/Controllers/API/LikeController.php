<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Like;
use Validator;
use App\Http\Resources\Like as LikeResource;
use App\Http\Controllers\API\BaseController as BaseController ;


class LikeController extends BaseController
{

    
    /*public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'like'=> 'required',
            
        ]);

        if ($validator->fails()){
            return $this->sendError('Please validate error',$validator->errors());
        }
        $like = Like::create($input);
        return $this->sendResponse(new LikeResource($like),'Like created successfully');

       

    }*/
    /*public function like(Request $request)
    {
        $like=$request->like;
        $like=DB::table('likes')
        ->where('post_id',$post_id);
        //->where('user_id',Auth::user()->id);
        if(!$like){
            $new_like=new Like;
            $new_like->post_id=$post_id;
            //$new_like->user_id=Auth::user()->id;
            $new_like->save();
        }
        $num=DB::table('likes')::where('post_id',$post_id)->count();
         return $this->sendResponse(new LikeResource($num));

    }*/
}
