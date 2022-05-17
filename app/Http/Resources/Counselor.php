<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Counselor extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'counselor_image'=> $this->counselor_image,
            'counselor_name'=>$this->counselor_name,
            'email'=>$this->email,
            'password'=>$this->password,
        ];
    }
}
