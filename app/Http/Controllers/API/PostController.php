<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Validator;
use App\Http\Resources\Post as PostResource;
use App\Http\Controllers\API\BaseController as BaseController;

 

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return $this->sendResponse(PostResource::collection($posts),
        'All Posts sent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'countent'=> 'required',
        ]);

        if ($validator->fails()){
            return $this->sendError('Please validate error',$validator->errors());
        }
        $user=User::find('id');
        $post = Post::create($input)->where('id',$user);
        return $this->sendResponse(new PostResource($post),'Post created successfully');

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $post = Post::find($id); 
        if (is_null($post)) {
            return $this->sendError('post not found');

        } 
             return $this->sendError(new PostResource($post),'post found success');

    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request,Post $post)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'countent'=> 'required',
        ]);
        if ($validator->fails()){
            return $this->sendError('Please validate error',$validator->errors());
        }
        $post ->countent=$input[countent];
        $post ->save();


        return $this->sendError(new PostResource($post),'post updat successful');

  
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Post $post)
    {
        $post->delete();
        return $this->sendResponse(new PostResource($post),'post deleted successfully');
    }*/
   // function upload(Request $request){
     //   $counselor_image = $request->file('counselor_image');
       // if($request->hasFile('counselor_image')){
         //   $new_name = rand().'.'.$image->getClientOriginalExtension();
           // $counselor_image->move(public_path('/uploads/images'),$new_name);
            //return response()->json($new_name);
        //}else{
          // return response()->json('image null');
        //}
    //}
}
