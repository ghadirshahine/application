<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Like extends JsonResource
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
        return
        [
            'like'=> $this->like,
            //'created_at'=> $this->created_at->format('d/m/y'),
            //'updated_at'=> $this->updated_at->format('d/m/y'),
        ];
    }
}
