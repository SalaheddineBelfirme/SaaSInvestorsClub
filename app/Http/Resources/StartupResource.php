<?php

namespace App\Http\Resources;
// use Illuminate\Http\Resources\Json\JsonResource as LaravelJsonResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StartupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,
            'name' => $this->name,
            'startup_description_short' => $this->Startup_Description_Short,
            'arr' => $this->ARR,
            'price' => $this->price,
            'traffic_metrics' => $this->Traffic_Metrics,
            'traffic_metrics_blur' => $this->Traffic_Metrics_blur,
            'category' => $this->category->name, 
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
