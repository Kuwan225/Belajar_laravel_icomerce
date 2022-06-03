<?php

namespace App\Models;

class Product
{
    private static $products = [
        [
            "image" => "https://static.republika.co.id/uploads/images/inpicture_slide/sebentar-lagi-bmw-akan-melakukan-penyegaran-untuk-produk-5_200528071820-980.jpg",
            "title" => "BMW 5 series",
            "slug" => "bmw-5-series",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo impedit facere tenetur dicta, fugiat illum rem beatae molestias! Deleniti est dicta mollitia dolore modi voluptatem hic."
        ],
        [
            "image" => "https://cdn.motor1.com/images/mgl/01yvV/s1/4x3/lamborghini-sc20.webp",
            "title" => "Lamborghini",
            "slug" => "lamborghini",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo impedit facere tenetur dicta, fugiat illum rem beatae molestias! Deleniti est dicta mollitia dolore modi voluptatem hic."
        ],
        [
            "image" => "https://static.republika.co.id/uploads/images/inpicture_slide/sebentar-lagi-bmw-akan-melakukan-penyegaran-untuk-produk-5_200528071820-980.jpg",
            "title" => "pajero",
            "slug" => "pajero",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo impedit facere tenetur dicta, fugiat illum rem beatae molestias! Deleniti est dicta mollitia dolore modi voluptatem hic."
        ],
    ];

    public static function all()
    {
        return collect(self::$products);
    }

    public static function find($slug)
    {
        $data = static::all();
        return $data->firstWhere('slug', $slug);
    }
}
