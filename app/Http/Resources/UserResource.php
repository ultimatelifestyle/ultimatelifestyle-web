<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'userid' => $this->id,
            'dmNumber' => $this->profile->dmNumber,
            'name' => $this->name,
            'recDate' => $this->records()->latest()->first('recDate'),
            'fbs' => $this->records()->latest()->first('fbs'),
            'breakfast' => $this->records()->latest()->first('breakfast'),
            'nuts' => $this->records()->latest()->first('nuts'),
            'lunch' => $this->records()->latest()->first('lunch'),
            'rbs' => $this->records()->latest()->first('rbs'),
            'fruits' => $this->records()->latest()->first('fruits'),
            'dinner' => $this->records()->latest()->first('dinner'),            
        ];
    }
}
