<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body'  =>$this->body,
            'image' => $this->image,
            'category_id' => $this->category_id
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author' => 'Anih Victor',
            'author_url' => url('https://avikky.github.io/anihvictor/about.html')
        ];
    }
}
