<?php 

class PostTableSeeder extends Seeder {

    public function run() {

        $post = new Post();
        $post->title = 'Why Codeup';
        $post->content = "I was looking for a career that would be more of a hobby than a job to me when I came across programming. I started learning Python & Javascript on my own and enjoyed writing a little code here and there. When I found Codeup it was a billboard by my street never paid much attention to before but one day I got curious what it could be about since I was already trying to learn programming, I did my research and found nothing but positive reviews about the program. This was my chance to learn from industry professionals and get a hands on education.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = 'My Experience At Codeup';
        $post->content = "So far I've had a great experience at Codeup, it's been exciting and at times challenging. The entire staff has been very helpful in advancing my skills as a programmer";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = 'Learning Laravel';
        $post->content = "At Codeup we are currently learning Object Oriented Programming. We started with vanilla PHP and gradually worked our way up to laravel which is what I'm using now.";
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Where's the Javascript?";
        $post->content = "Dear Javascript, Where are you?";
        $post->user_id = 2;
        $post->save();

        
    }
}