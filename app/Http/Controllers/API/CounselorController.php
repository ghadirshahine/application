<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Counselor;
use Validator;
use App\Http\Resources\Counselor as CounselorResource;
use App\Http\Controllers\API\BaseController as BaseController ;


class CounselorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counselors=Counselor::all();
        return $this->sendResponse(CounselorResource::collection($counselors),'all counselors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
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
        'counselor_image'=>'image|mimes:jpg,jpeg,gif,png',
        'counselor_name'=>'required',
        'email'=>'required',
        'password'=>'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
    $counselor=Counselor::create($input);
    return $this->sendResponse(new CounselorResource($counselor),'counselor created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($counselor_id)
    {
        $counselor=Counselor::find($counselor_id);
        if (is_null($counselor)) {
            return $this->sendError('counselor not found');
        }
            return $this->sendResponse(new CounselorResource($counselor),'counselor found successfully');

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
    public function update(Request $request,Counselor $counselor)
    {
        $input = $request->all();
        $validator=Validator::make($input, [
        'counselor_image'=>'image|mimes:jpg,jpeg,gif,png',
        'counselor_name'=>'required',
        'email'=>'required',
        'password'=>'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
    $counselor->counselor_image=$input['counselor_image'];
    $counselor->counselor_name=$input['counselor_name'];
    $counselor->email=$input['email'];
    $counselor->password=$input['password'];
    $counselor->save();
    return $this->sendResponse(new CounselorResource($counselor),'counselor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counselor $counselor)
    {
        $counselor->delete();
        return $this->sendResponse(new CounselorResource($counselor),'counselor deleted successfully');
    }
}
