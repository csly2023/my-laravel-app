<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $products = [];

    public static function getProduct()
    {
        self::$products = [
            0 => [
                'id' => 1,
                'name' => 'smart t shirt',
                'price' => 1500,
                'description' => 'smart t shirt description',
                'image' => 'img/2.jpg'
            ],
            1 => ['id' => 2,
                'name' => 'new fashionable shirt',
                'price' => 2500,
                'description' => 'new fashionable shirt description',
                'image' => 'img/3.jpg'],
            2 => ['id' => 3,
                'name' => 'smart t shirt',
                'price' => 3500,
                'description' => 'smart t shirt description',
                'image' => 'img/4.jpg'],
            3 => ['id' => 4,
                'name' => 'formal jean pant',
                'price' => 4500,
                'description' => 'formal jean pant description',
                'image' => 'img/1.jpg'],
            4 => ['id' => 5,
                'name' => 'sony new mobile',
                'price' => 5500,
                'description' => 'sony new mobile description',
                'image' => 'img/5.jpg'],
        ];

        return self::$products;

    }
}
