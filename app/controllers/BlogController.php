<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class BlogController extends Controller {
    private $postModel;

    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $data = [
            'title' => '部落格文章',
            'posts' => $this->postModel->getAllPosts()
        ];
        
        $this->view('blog/index', $data);
    }

    public function view($slug = '') {
        $post = $this->postModel->getPostBySlug($slug);
        
        if (!$post) {
            header('Location: /blog');
            exit;
        }

        $data = [
            'title' => $post['title'],
            'post' => $post
        ];
        
        $this->view('blog/single', $data);
    }
}