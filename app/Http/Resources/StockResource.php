<?php

namespace App\Http\Resources;

use App\Models\Attribut;
use App\Models\Value;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result =[
            'quantity'=>$this->quantity,
        ];
        return $this->getAttributs($result);
    }
        public function getAttributs(array $result): array
        {
        $attributs= json_decode($this->attributs);
        foreach($attributs as $stockAttribute){
            $attribute= Attribut::find($stockAttribute->attribut_id);
            $value=Value::find($stockAttribute->value_id);
           $result[$attribute->name]=$value->getTranslations('name');
        }


        return $result;
    }
}
