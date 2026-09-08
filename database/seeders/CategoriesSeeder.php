<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public $categories =[
        'Elettronica',
        'Abbigliamento',
        'Salute e Bellezza',
        'Casa e Giardinaggio',
        'Giocattoli',
        'Sport',
        'Libri e Riviste',
        'Cibo e Bevande',
        'Viaggi e Turismo',
        'Arte e Artigianato',
        'Musica e Film',
        'Accessori',
        'Motori'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category 
            ]); 
        }
    }
}
