<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'brand_id' => $this->brand_id,
            'model_name' => $this->model_name,
            'manufacturing_year' => $this->manufacturing_year,
            'price' => $this->price,
            'mileage' => $this->mileage,
        ];
    }
}
