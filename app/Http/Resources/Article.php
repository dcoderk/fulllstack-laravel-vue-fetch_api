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
        //return parent::toArray($request);

        // display only data without created_at and update_at on front end
        return [
            'id'     => $this->id,
            'title'  => $this->title,
            'body'   => $this->body
        ];
    }

    // adding data on object using with()
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://frontlinecoder.com')
        ];
    }
}
