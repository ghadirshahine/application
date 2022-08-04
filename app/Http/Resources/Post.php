<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return
        [
            'countent'=> $this->countent,
            //'created_at'=> $this->created_at->format('d/m/y'),
            //'updated_at'=> $this->updated_at->format('d/m/y'),
        ];
    }
}
