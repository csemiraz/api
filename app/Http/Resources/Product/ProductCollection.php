<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock==0 ? 'Out of stock' : $this->stock,
            'discount' => $this->discount,
            'totalPrice' => round($this->price-(($this->discount*$this->price)/100), 2),
            'href' => [
                'link' => route('products.show', $this->id),
            ],
        ];
    }
}
