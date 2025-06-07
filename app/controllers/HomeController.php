<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;
use App\Models\Portfolio;

class HomeController extends Controller {
    private $postModel;
    private $portfolioModel;

    public function __construct() {
        $this->postModel = $this->model('Post');
        $this->portfolioModel = $this->model('Portfolio');
    }

    public function index() {
        $data = [
            'title' => '首頁',
            'latest_posts' => $this->postModel->getLatestPosts(3),
            'featured_projects' => $this->portfolioModel->getFeaturedProjects(3)
        ];
        
        $this->view('home/index', $data);
    }
}