<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Educator;
use Validator;
use App\Http\Resources\Educator as EducatorResource;
use App\Http\Controllers\API\BaseController as BaseController ;


class EducatorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educators=Educator::all();
        User::where('user_type',0)->get();
        return $this->sendResponse(EducatorResource::collection($educators),'all educators');
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
    /*public function store(Request $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($educator_id)
    {
        $educator=Educator::find($educator_id);
        if (is_null($educator)) {
            return $this->sendError('educator not found');
        }
            return $this->sendResponse(new EducatorResource($educator),'educator found successfully');

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
    public function update(Request $request,Educator $educator)
    {
        $input = $request->all();
        $validator=Validator::make($input, [
        'educator_image'=>'image|mimes:jpg,jpeg,gif,png',
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('validate Error',$validator->errors());
        }
    $educator->educator_image=$input['educator_image'];
    $educator->name=$input['educator_name'];
    $educator->email=$input['email'];
    $educator->password=$input['password'];
    $educator->save();
    return $this->sendResponse(new EducatorResource($educator),'educator updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Educator $educator)
    {
        $educator->delete()->where('user_id',Auth::user()->id);
        return $this->sendResponse(new EducatorResource($educator),'educator deleted successfully');
    }*/
}
