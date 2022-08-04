<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

use Validator;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Controllers\API\BaseController as BaseController ;



class CommentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$comments=Comment::all();
        //$postid=Post::find('post_id');
        //$comments = Comment::all()->where('post_id',$postid);
        //$comments = Comment::all()->where('post_id',$postid);

        //@foreach ($comments as $comment) {

        //return $this->sendResponse(CommentResource::collection($comment),'all comments');
        }
        //endforeach
        //return $this->sendResponse($comments,'all comments');
        $comments= Post::find($post_id)->comments->comment_text;
        return $this->sendResponse(CommentResource::collection($comments),'all comments');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $input = $request->all();
        $validator=Validator::make($input, [
        'comment_text'=>'required',
        /*'comment'=>'required'*/]);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
        $input=$request->all();
        $input['post_id']=$id;
        $input['id']=$request->user()->id;
        $comment=Comment::create($input);
    


    return $this->sendResponse(new CommentResource($comment),'comment created successfully');

    

    }
    /*public function save_comment(Request $request,$id)
    {
        $input = $request->all();
        $validator=Validator::make($input, [
        'comment_text'=>'required',
        /*'comment'=>'required']);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
        $input=$request->all();
        $input['post_id']=$id;
        $input['id']=$request->user()->id;
        $comment=Comment::create($input);
    


    return $this->sendResponse('success','comment created successfully');*/

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        //->where('user_id',Auth::user()->id);
        //$postid=Post::find('post_id');
        //$comments = Comment::get()->where($post_id,$postid);
        
        //$comment=Comment::find($comment_id);
        return Post::find($post_id)->comments->comment_text;
        /*if (is_null($comments)) {
            return $this->sendError('comment not found');
        }
            return $this->sendResponse(new CommentResource($comments),'comment found successfully');*/


    }
    /*public function comment(Request $request)
    {
        $comment=$request->comment;
        $comment=DB::table('comments')
        ->where('post_id',$post_id);
        //->where('user_id',Auth::user()->id);
        if(!$comment){
            $new_comment=new Comment;
            $new_comment->post_id=$post_id;
            //$new_like->user_id=Auth::user()->id;
            $new_comment->save();
        }
        $num=DB::table('comments')::where('post_id',$post_id)->count();
         return $this->sendResponse(new CommentResource($num));

    }*/
    /*comments.replies*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        //
    }*/
}
