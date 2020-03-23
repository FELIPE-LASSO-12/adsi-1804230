<?php

use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        		DB::table('categories')->insert([
				'name' => 'Technology',
				'image'=> 'imgs/no-photo.png',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae accusamus fugiat.',
				]);

        		$category = new App\Categories;
				$category->name  = 'Sport';
				$category->image  = 'imgs/no-category.png';
				$category->description     = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae accusamus fugiat';
				$category->save();

				$category = new App\Categories;
				$category->name        = 'Home';
				$category->image       = 'imgs/no-category.png';
				$category->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae accusamus fugiat';
				$category->save();
    }
}
