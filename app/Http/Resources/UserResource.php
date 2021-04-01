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
            'userid' => $this->user->id,
            'name' => $this->user->name,
            'phoneNumber' => $this->user->phoneNumber,
            'dmNumber' => $this->dmNumber,
            'dob' => $this->dob,
            'address' => $this->address,
            'diabetesAge' => $this->diabetesAge,
            'favFood' => $this->favFood,
            'profile_pif' => $this->profile_pif,
        ];
    }
}
