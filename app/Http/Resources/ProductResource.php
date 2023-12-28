<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        die;
        return parent::toArray($request);
        return [
            'id' => $this->uid,
            'product_name'=> $this->product_name,
            'product_slug'=> $this->product_slug,
            'product_brand'=> $this->product_brand,
            'product_price'=> getCurrencySymbol($this->product_price),
            'product_image'=> $this->product_image,
            'product_flip_image'=> $this->product_flip_image,
            'product_desc_images'=> $this->product_desc_images,
            'product_discount_percentage'=> $this->product_discount_percentage,
            'product_sku'=> $this->product_sku,
            'product_short_description'=> $this->product_short_description,
            'product_long_description'=> $this->product_long_description,
            'status'=> $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
