<?php

namespace App\Http\Resources\Api\V1;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
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
            'name' => $this->service_name,
            'description' => $this->service_description,
            'price' => $this->service_price,
            'images' => $this->service_images, // Cast as array
            'video' => $this->service_video,
            'benefits' => $this->service_benefits, // Cast as array
            'rating' => $this->service_rating,
            'reviews' => $this->service_reviews,
            'sale_tag' => $this->service_sale_tag,
            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
