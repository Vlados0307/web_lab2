<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
     protected $table = 'products';

        protected $fillable = [
            'name',
            'price',
            'image'
        ];

        public function toArray()
        {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price,
                'inCart' => false
            ];
        }
}
