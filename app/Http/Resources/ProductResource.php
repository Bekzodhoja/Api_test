<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\StockResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    
   
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->getTranslations('description'),
            'category'=>new CategoryResource($this->category),

            'inventory'=> StockResource::collection($this->stocks),
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at

        ];
    }
}
