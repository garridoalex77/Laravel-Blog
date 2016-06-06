<?php 

class PostTableSeeder extends Seeder {

    public function run() {

        $post = new Post();
        $post->title = 'Learning Laravel';
        $post->content = "At Codeup we are currently learning Object Oriented Programming. We started with vanilla PHP and gradually worked our way up to laravel which is what I'm using now.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 2;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 2;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 2;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, I miss you come back.";
        $post->user_id = 2;
        $post->save();
    }
}