<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('articles')->delete();

        \App\Article::create([
            'title' => 'title two',
            'body' => 'body two',
            'published_at' => '2014-06-06 18:20:20'
        ]);
        \App\Article::create([
            'title' => 'title three',
            'body' => 'body three',
            'published_at' => '2014-08-08 20:20:20'
        ]);
    }

}
