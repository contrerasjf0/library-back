<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 30)->create([
            'category_id' => function (){
                return rand(1,8);
            }
        ]);
    }
}
