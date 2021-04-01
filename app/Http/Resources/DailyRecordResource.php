<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DailyRecordResource extends JsonResource
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
            'recDate' => $this->recDate,
            'fbs' => $this->fbs,
            'breakfast' => $this->breakfast,
            'nuts' => $this->nuts,
            'lunch' => $this->lunch,
            'rbs' => $this->rbs,
            'fruits' => $this->fruits,
            'dinner' => $this->dinner,
        ];
    }
}
