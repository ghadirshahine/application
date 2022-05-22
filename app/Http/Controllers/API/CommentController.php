<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Comment;
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
        $comments=Comment::all();
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
    public function store(Request $request)
    {
        $input = $request->all();
        $validator=Validator::make($input, [
        'comment_text'=>'required',
        'comment'=>'required']);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
    @php
    $comment_count = 0;
    @endphp
    $comment=Comment::create($input);
    $comment_count++;


    return $this->sendResponse(new CommentResource($comment),'comment created successfully');

    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comment_id)
    {
        $comment=Comment::find($comment_id);
        if (is_null($comment)) {
            return $this->sendError('comment not found');
        }
            return $this->sendResponse(new CommentResource($comment),'comment found successfully');


    }

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
