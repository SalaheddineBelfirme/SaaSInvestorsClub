<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotifyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
         'id'=>$this->id,
          'Notification'=>$this->notification,
          'UserName'=>$this->user->name,
          'UserImage'=>$this->user->image,   
        ];
    }
}
