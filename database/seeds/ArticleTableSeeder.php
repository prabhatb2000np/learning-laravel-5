<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	 DB::table('articles')->delete();

         \App\Article::create([
            'title' => 'title one',
            'body'=>'body one',
            'published_at'=>'2014-05-05 14:10:10'
            ]);
	}

}
