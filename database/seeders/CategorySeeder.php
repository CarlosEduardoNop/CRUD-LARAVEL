<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Informática',
                'description' => 'Produtos de Informática'
            ],
            [
                'name' => 'Eletrodoméstico',
                'description' => 'Produtos de Eletrodoméstico'
            ],
            [
                'name' => 'Celulares',
                'description' => 'Produtos de Celulares'
            ],
            [
                'name' => 'TV e Vídeo',
                'description' => 'Produtos de TV e Vídeo'
            ],

        ];

        foreach ($categories AS $category) {
            Category::create($category);
        }
    }
}
