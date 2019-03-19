<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }
}

$posts = [
    new post('My First Post', 'JW',true),
    new post('My Second Post', 'JW',true),
    new post('My Third Post', 'AW',true),
    new post('My Fourth Post', 'TR',false)
];

//$unpublishedPosts = array_filter($posts, function ($post) {
//    return ! $post->published;
//});
//
//$publishedPosts = array_filter($posts, function ($post) {
//    return $post->published;
//});

//$modified = array_map(function ($post) {
//    return ['title' => $post->title];
//}, $posts);

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

var_dump($posts);

$titles = array_column($posts, 'author');

var_dump($titles);