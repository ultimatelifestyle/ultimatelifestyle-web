<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvResource extends JsonResource
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
            'dmNumber' => $this->user->profile->dmNumber,
            'name' => $this->user->name,
            'testDate' => $this->testDate,
            'Cpeptide' => $this->Cpeptide,
            'hba1c' => $this->hba1c,
            'cholesterol' => $this->cholesterol,
            'hdl' => $this->hdl,
            'ldl' => $this->ldl,
            'tg' => $this->tg,
            'ratio' => $this->ratio,
            'cr' => $this->cr,
            'tsh' => $this->tsh,
            'nextTest' => $this->nextTest,

        ];
    }
}
