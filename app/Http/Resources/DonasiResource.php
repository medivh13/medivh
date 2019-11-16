<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DonasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // dd($request->all());
        return [
            'id' => $this->id,
            'penerima' => $this->penerima->name,
            'value' => $this->value
        ];
    }
}
