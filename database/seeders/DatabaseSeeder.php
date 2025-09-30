<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Adam',
            'email' => 'thefirstaware@human.com'
        ]);

        $categories = [
            'Tours',
            'Merch',
            'Miscelaneous',
            'Releases',
            'Collabs'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory()->create(attributes: [
            'title' => 'Exemplo para Tu',
            'slug' => \Illuminate\Support\Str::slug('Exemplo para Tu'),
            'content' => 'Num ninho de mafagafos há sete mafagafinhos. Quando a mafagafa gafa, gafam os sete mafagafinhos. Trazei três pratos de trigo para três tigres tristes comerem.',
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 1,
            'published_at' => fake()->optional()->dateTime()
        ]);

        Post::factory(10)->create();
    }
}
