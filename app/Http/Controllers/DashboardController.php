<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data koleksi produk Ralph Lauren
        $collections = [
            [
                'name' => 'Polo Shirt',
                'description' => 'Classic fit polo shirt with soft cotton material.',
                'price' => 120,
                'image' => 'images/products/polo.jpg'
            ],
            [
                'name' => 'Leather Jacket',
                'description' => 'Premium leather jacket with vintage style.',
                'price' => 450,
                'image' => 'images/products/jaket.jpg'
            ],
            [
                'name' => 'Wool Sweater',
                'description' => 'Warm wool sweater for winter season.',
                'price' => 150,
                'image' => 'images/products/sweater.jpg'
            ],
            [
                'name' => 'Chinos Pants',
                'description' => 'Comfortable chinos pants for casual wear.',
                'price' => 90,
                'image' => 'images/products/chinos.jpg'
            ],
            [
                'name' => 'Long Sleev T-Shirt',
                'description' => 'Elegant Long Sleeve for men with clean look.',
                'price' => 70,
                'image' => 'images/products/kemeja.jpg'
            ],
            [
                'name' => 'Blazer',
                'description' => 'High-quality blazer for everyday use.',
                'price' => 110,
                'image' => 'images/products/blazer.jpg'
            ]
        ];

        // Mengirim data ke view index.blade.php
        return view('dashboard.index', ['collections' => $collections]);
    }
}
