<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "img" => asset('uploads') . '/' . $this->img,
            "price" => number_format($this->price,2),
            //لو عاوز اعرض الكتوجرى كلها
            "category" => new CatResource($this->cat),
            "created_at" => $this->created_at,
        ];
    }
}
