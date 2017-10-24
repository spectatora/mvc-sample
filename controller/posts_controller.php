<?php
class PostsController {
    public function index() {
        // we store all the posts in a variable
        $posts = Post::all();
        require_once('view/posts/index.php');
    }

    public function show() {

         // we use the given id to get the right post
        $post = Post::find();
        require_once('view/posts/show.php');
    }
}