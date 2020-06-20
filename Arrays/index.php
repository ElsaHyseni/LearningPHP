<?php

class Post{

  public $title;
  public $published;

  public function __construct($title, $published){
    $this->title = $title;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', true),
  new Post('My Second Post', false),
  new Post('My Third Post', false)
];

array_map(function($post){
  $post->published = true;
}, $posts );

$titles = array_column($posts, 'title');
var_dump($titles);

//$unpublishedPosts = array_filter($posts,
//        function($post){
//          return $post->published == false;
//});
//
//$publishedPosts = array_filter($posts,
//        function($post){
//          return $post->published;
//});
