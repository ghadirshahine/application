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
            'counselor_image'=> $this->counselor_image,
            'counselor_name'=>$this->counselor_name,
            'countent'=> $this->countent,
            'like_count'=> $this->like_count,
            'comment_count'=> $this->comment_count,
            'created_at'=> $this->created_at->format('d/m/y'),
            'updated_at'=> $this->updated_at->format('d/m/y'),
        ];
    }
}
